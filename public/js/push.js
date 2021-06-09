//https://www.npmjs.com/package/web-push
const public_key = "BBLqx3_KRDPZ83j0-pal5uP-oxz7j5JsCComm5pCgfv0lXqCGqKJH69Tx7TKhDAhfVQ5etWgb0h_PXDEMLakZUU";
if( 'serviceWorker' in navigator ){
    navigator.serviceWorker.register("/js/sw.js").then(reg=>{
        console.log("Registrando el servicio de NOtificaciones PUSH");
        if(reg.installing){
            console.log("Instalando proceso en segundo plano");
        }else if(reg.waiting){
            console.log("Esperando proceso de instalacion");
        } else if(reg.active){
            console.log("Servicio de notificaciones PUSH instalado y Listo para usarse");
            suscribirse(reg);
        } else {
            console.log("Error al intentar registrar las notificaciones PUSH");
        }
    });
} else {
    alert("Lo siento tu navegador No soporta registro de notificaciones PUSH");
}

function suscribirse(reg){
    reg.pushManager.subscribe({
        userVisibleOnly:true,
        applicationServerKey:urlBase64ToUint8Array(public_key)
    }).then(subscription=>{
        console.log("enviando la subscripcion al servidor", JSON.stringify(subscription));
        socket.emit('subscription', JSON.stringify(subscription));
    }).catch(error=>{
        if(Notification.permission==='denied'){
            console.log("No tienes permiso para registrar las notificaciones");
        }else{
            console.log("No pude registrar las notificaciones PUSH", error);
        }
    });
}

function urlBase64ToUint8Array(base64String) {
    const padding = '='.repeat((4 - base64String.length % 4) % 4);
    const base64 = (base64String + padding)
      .replace(/-/g, '+')
      .replace(/_/g, '/');

    const rawData = window.atob(base64);
    const outputArray = new Uint8Array(rawData.length);

    for (let i = 0; i < rawData.length; ++i) {
      outputArray[i] = rawData.charCodeAt(i);
    }
    return outputArray;
  } 