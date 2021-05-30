/*console.log("Hola mundo desde NodeJS");

let num1 = 5,
    num2 = 6,
    resp = num1+ num2;
console.log("La respuesta es: ", resp);

let generarTable = (ntable) =>{
    for(let i=1; i<=10; i++){
        console.log(`${ntable}*${i}=${ntable*i}`);
    }
}; 

generarTable(8);
generarTable(9); */


const port = 3001;

/*
const http = require("http"),
      server = http.createServer( (req, resp)=>{
          resp.writeHead(200, {'content-type':'text/plain'});
          resp.end("Hola mundo desde NodeJS");
      } ).listen(port);

console.log("NodeJS se esta ejecutando en el puerto", port);   
*/

const http = require("http").Server(),
      express = require("express"),
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
      dbname = 'chatDB';

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
});

/*app.use(cors());
app.use(express.json());

app.post("/chat",(req, resp)=>{
    mongodb.connect(url,(err, client)=>{
        if(err) console.log("No fue posible conectarse a la base de datos",err);
        const db = client.db(dbname);
        const result = db.collection("chat").insertOne(req.body).then((result)=>{
            resp.send( result );
        });
    });
    resp.send("Este es un saludo desde un servidor de node con el framework de express: "+ req.body.msg);
});

app.get("/historial",(req, resp)=>{
    mongodb.connect(url,(err, client)=>{
        if(err) console.log("No fue posible conectarse a la base de datos",err);
        const db = client.db(dbname);
        db.collection("chat").find().toArray((err, msgs)=> {
            resp( msgs );
        })
    });
});

app.listen(port,()=>{
    console.log("Ejecutandose nuestra app con express en el puerto", port);
});
*/