const port = 3001;

const http = require("http").Server(),
      express = require("express"),
      fs = require('fs'),
      Files = {},
      io = require("socket.io")(http,{
          allowEIO3 : true,
          cors: {
              origin: ["http://localhost:8000"],
              credentials : true
          }
      }),
      app = express(),
      cors = require('cors'),
      mongodb = require('mongodb').MongoClient,
      url = 'mongodb://localhost:27017';
      dbname = 'chatDB',
      webpush = require('web-push'), //https://www.npmjs.com/package/web-push --> aqui sacamos los comandos para generar las llaves por si te fijas cuando lo clones
      vapidKeys = {
          publicKey:'BBLqx3_KRDPZ83j0-pal5uP-oxz7j5JsCComm5pCgfv0lXqCGqKJH69Tx7TKhDAhfVQ5etWgb0h_PXDEMLakZUU',
          privateKey:'77_zQg27_rJePVxI_yGHO3g6onU3qaQPAo_itJw5wiU'
      };
var pushSubscription; //Esta subscripcion hay que almacenarla en una BD;
webpush.setVapidDetails("mailto:usis022519@ugb.edu.sv", vapidKeys.publicKey, vapidKeys.privateKey);

http.listen(port,()=>{
    console.log("Ejecutandose nuestra app con socket.io en node por el puerto", port);
})

io.on('connection', socket=>{
    console.log("Usuarios conectados via soket...");
    socket.on('chat',chat=>{
        mongodb.connect(url,(err, client)=>{
            if(err) console.log("No fue posible conectarse a la base de datos",err);
            const db = client.db(dbname);
            db.collection("chat").insertOne(chat).then((result)=>{
                io.emit("chat",chat); // en este envia mensaje a todos
                try{
                    const data = JSON.stringify({title:chat.from, msg:chat.msg});
                    webpush.sendNotification(pushSubscription, data);
                }catch(e){
                    console.log("Error al enviar la notificacion PUSH", e);
                }
            });
        });
    });
    socket.on('historial',()=>{
        mongodb.connect(url,(err, client)=>{
            if(err) console.log("No fue posible conectarse a la base de datos",err);
            const db = client.db(dbname);
            db.collection("chat").find({}).toArray((err, msgs)=>{
                socket.emit('historial', msgs); // y aqui solo aquien solicita la informacion
            });
        });
    });
    socket.on('subscription',subscription=>{
        pushSubscription = JSON.parse(subscription);
        console.log("subscripcion: ", subscription);
    });
    socket.on('envio_archivos', data=> {
        var Name = data['msg'];
        Files[Name]['Downloaded'] += data['Data'].length;
        Files[Name]['Data'] += data['Data'];
        if (Files[Name]['Downloaded'] == Files[Name]['FileSize']) { //Si el archivo está completamente cargado
            fs.write(Files[Name]['Handler'], Files[Name]['Data'], null, 'Binary', function (err, Writen) {
                mongodb.connect(url,(err, client)=>{
                    if(err) console.log( "No fue posible conectarse a la base de datos",err );
                    const db = client.db(dbname);
                    data['Data'] = null;
                    db.collection("chat").insertOne(data).then((result)=>{
                        io.emit('chat',data);//envia a todos
                        try{
                            const noti = JSON.stringify({title:data.from, msg:data.msg});
                            webpush.sendNotification(pushSubscription, noti);
                        }catch(e){
                            console.log("Error al enviar notificacion PUSH", e);
                        }
                    });
                });
            });
        } else if (Files[Name]['Data'].length > 10485760) { //Si el búfer de datos alcanza los 10 MB
            fs.write(Files[Name]['Handler'], Files[Name]['Data'], null, 'Binary', function (err, Writen) {
                Files[Name]['Data'] = ""; //Restablecer el búfer
                var Place = Files[Name]['Downloaded'] / 524288;
                var Percent = (Files[Name]['Downloaded'] / Files[Name]['FileSize']) * 100;
                socket.emit('MoreData', {
                    'Place': Place,
                    'Percent': Percent
                });
            });
        } else {
            var Place = Files[Name]['Downloaded'] / 524288;
            var Percent = (Files[Name]['Downloaded'] / Files[Name]['FileSize']) * 100;
            socket.emit('MoreData', {
                'Place': Place,
                'Percent': Percent
            });
        }
    });
    socket.on('inicio_envio_archivos', data=>{
        var Name = data['Name'];
        let ruta = __dirname.slice(0,-4);
        Files[Name] = { //Crear una nueva entrada en la variable de archivos
            FileSize: data['Size'],
            Data: "",
            Downloaded: 0
        }
        var Place = 0;
        try {
            var Stat = fs.statSync(ruta + '/public/archivos/' + Name);
            if (Stat.isFile()) {
                Files[Name]['Downloaded'] = Stat.size;
                Place = Stat.size / 524288;
            }
        } catch (er) {
            console.log(er);
        } //Es un archivo nuevo

        fs.open(ruta + "/public/archivos/" + Name, 'a', 0755, function (err, fd) {
            if (err) {
                console.log(err);
            } else {
                Files[Name]['Handler'] = fd; //Almacenamos el controlador de archivos para poder escribir en él más tarde
                socket.emit('MoreData', {
                    'Place': Place,
                    Percent: 0
                });
            }
        });
    });
});
