//Este script lo ocupamos para que se ejecuta en segundo plano
self.addEventListener('push',e=>{
    const data = e.data.json();
    console.log("Recibiendo las Notificaciones PUSH", data);
    self.registration.showNotification(data.title, {
        body:data.msg,
        icon:'/img/chat.png'
    });
});