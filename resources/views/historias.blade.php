@extends('layout_historias')

@section('publicas')
<!DOCTYPE html>
<html lang="en">
<title>Historias de voluntario/as</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft", "Roboto", sans-serif}
.w3-bar-block .w3-bar-item {padding: 16px}
</style>
<body>

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:3;width:320px;" id="mySidebar">
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom w3-large">Heroes Voluntarios</a>
  <a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" 
  class="w3-bar-item w3-button w3-hide-large w3-large">Close <i class="fa fa-remove"></i></a>
  <a id="myBtn" onclick="myFunc('Demo1')" href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-inbox w3-margin-right"></i>Historias (5)<i class="fa fa-caret-down w3-margin-left"></i></a>
  <div id="Demo1" class="w3-hide w3-animate-left">
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Borge');w3_close();" id="firstTab">
      <div class="w3-container">
        <img class="w3-round w3-margin-right" src="/img/avatar6.png" style="width:15%;"><span class="w3-opacity w3-large">Karen Lopez</span>
        <h6>Area:  social</h6>
        <p>El sentimiento de inconformidad hacia la desigualdad...</p>
      </div>
    </a>
     <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Jane');w3_close();">
      <div class="w3-container">
        <img class="w3-round w3-margin-right" src="/img/avatar3.png" style="width:15%;"><span class="w3-opacity w3-large">Valentina Soto</span>
        <h6>Area: Comunitario</h6>
        <p>La idea de hacer voluntariado comenz?? cuando supe del plan...</p>
      </div>
    </a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('John');w3_close();">
      <div class="w3-container">
        <img class="w3-round w3-margin-right" src="/img/avatar2.png" style="width:15%;"><span class="w3-opacity w3-large">Juan Manuel Ramirez</span>
        <h6>Area: Comunitario</h6>
        <p>Llegu?? a TECHO en agosto de 2013. Fui invitado a la Colecta...</p>
      </div>
    </a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('David');w3_close();">
      <div class="w3-container">
        <img class="w3-round w3-margin-right" src="/img/avatar4.jpg" style="width:15%;"><span class="w3-opacity w3-large">Ferran Mart?? Paulo</span>
        <h6>Area: Tecnologica</h6>
        <p>recibi?? el Premio Fundaci??n Esplai a la Ciudadan??a Comprometida en el a??o 2014, en la categor??a...</p>
      </div>
    </a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Josue');w3_close();" id="firstTab">
      <div class="w3-container">
        <img class="w3-round w3-margin-right" src="/img/avatar5.png" style="width:15%;"><span class="w3-opacity w3-large">Elian Delgado</span>
        <h6>Area:  Educaci??n</h6>
        <p>Tengo 18 a??os y comenc?? a hacer voluntariado desde marzo del 2016...</p>
      </div>
    </a>
  </div>
</nav>

<!-- Overlay effect when opening the side navigation on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>

<!-- Page content -->
<div class="w3-main" style="margin-left:320px;">
<i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-left w3-margin-top" onclick="w3_open()"></i>

<div id="Borge" class="w3-container person">
  <br>
  <img class="w3-round  w3-animate-top" src="/img/avatar6.png" style="width:20%;">
  <h5 class="w3-opacity"> Karen Lopez</h5>
  <h4><i class="fa fa-clock-o"></i> Sep 27, 2021.</h4>
  <hr>
  <p>El sentimiento de inconformidad hacia la desigualdad social, el da??o ambiental, las injusticias y muchas otras razones, generan una necesidad de generar un cambio, de que las cosas sean
diferentes, de que el mundo sea un mejor lugar para todos y todas. Eso es lo que me motiv?? a hacer voluntariado.</p>
  <p>Desde el primer momento que comenc?? a ser voluntaria, decid?? ser parte de esta forma de vida; conocer historias y formar parte de ellas, de alterar una historia y de la misma forma alterar la m??a.</p>
  <p>He hecho del voluntariado mi forma de vida para poder, dia con dia, ser esa chispa que busca generar cambio y poder esparcirla; ya sea buscando terminar con la injusticia, la desigualdad social,
el da??o medioambiental o con cualquier actividad que signifique un impacto en la vida de alguien m??s.</p>
<p>Siendo voluntario o voluntaria se aprende a ver m??s all?? de lo que se muestra, se conoce la realidad de las cosas, tambi??n se genera empat??a hacia combatir las injusticias que, autom??ticamente
pasan a ser nuestras tambi??n.</p>
  <p>Ser voluntario no es cambiar la vida de los dem??s, es transformar la nuestra mientras aportamos a otras.</p>
</div>

<div id="Jane" class="w3-container person">
  <br>
  <img class="w3-round w3-animate-top" src="/img/avatar3.png" style="width:20%;">
  <h5 class="w3-opacity">Valentina Soto</h5>
  <h4><i class="fa fa-clock-o"></i> Sep 25, 2020.</h4>
  <hr>
  <p>La idea de hacer voluntariado comenz?? cuando supe del plan de educaci??n de TECHO en asentamientos irregulares. A??n no sab??a bien de qu?? se trataba y por eso tampoco me decid??a
a dar el paso. Poco tiempo despu??s fui a una construcci??n de viviendas de emergencia a la que me invit?? mi hermano y me impact?? mucho la realidad de nuestro pa??s y que siempre
hubiera estado tan cerca de m?? y no la haya visto. Al darme cuenta de esto, supe que ten??a que seguir ah?? y aportar algo para generar el cambio que necesitamos. Adem??s, me gust??
mucho el ambiente que hay entre los y las voluntarias de la organizaci??n.</p>
  <p>Despu??s me sum?? al equipo que organiza las asambleas comunitarias (espacios de trabajo en conjunto con la comunidad) y estuve ah?? aproximadamente dos a??os y medio.
Me gustan mucho todos los proyectos de la organizaci??n, pero lo que m??s me gusta es ir cada domingo a comunidad, pues lo percibo como un espacio para aprender  y compartir,
en donde, adem??s, hemos generado un v??nculo muy especial entre voluntarios/as y vecinos/as.</p>
<p>Sin duda,  para m?? hay un antes y un despu??s desde que comenc?? a ser voluntaria; siento que he crecido mucho a nivel personal y creo que muchos, cuando empezamos alg??n
voluntariado creemos que vamos a aportar  y, aunque s?? es as??, muchas veces no estamos conscientes de todo lo que vamos a recibir tambi??n. He recibido mucho cari??o, experiencia
y aprendizajes de diferentes tipos, pero creo que hay dos cosas que resaltan: la primera es la resiliencia, tanto de los vecinos como de los y las voluntarias; esa capacidad de salir
adelante y de adaptarse pese a todo, y la segunda es que ???es m??s lo que nos une que lo que nos separa???.</p>
</div>

<div id="John" class="w3-container person">
  <br>
  <img class="w3-round w3-animate-top" src="/img/avatar2.png" style="width:20%;">
  <h5 class="w3-opacity">Juan Manuel Ramirez</h5>
  <h4><i class="fa fa-clock-o"></i> Sep 23, 2020.</h4>
  <hr>  
  <p>Llegu?? a TECHO en agosto de 2013. Fui invitado a la Colecta (evento de recaudaci??n de fondos) de ese a??o con la promesa de que ???ser??a divertido??? y sin duda lo fue; estar gritando
en la calle con pelucas y disfraces chistosos era algo que nunca hab??a hecho, pero a??n no ten??a un contexto claro de porqu?? lo hac??a.</p>
  <p>Fueron meses despu??s que tuve la oportunidad de participar en una construcci??n de viviendas de emergencia en asentamientos irregulares y fue ah?? que, como a muchos, me lleg?? el
baldazo de agua fr??a. El momento en que conoc?? c??mo es la situaci??n en que viven millones de personas en El Salvador y Latinoam??rica, y el despertar de una convicci??n que ten??a dormida
y de ah?? en adelante ha sido una historia de aprendizajes y retos de todo tipo.</p>
<p>El voluntariado da un mont??n, desde trabajar en conjunto con los l??deres comunitarios, aprender de ellos y viceversa, hasta acercarme a otras realidades que est??n ah?? y que la mayor??a
ignora. Decid?? no ignorarlas y hacer mi aporte para combatir ese gigantesco monstruo que representan la pobreza y desigualdad.</p>
<p>Agradezco a todas las personas que han confiado en m??, quienes se han vuelto parte mi familia. Vibramos en la misma frecuencia y juntos somos esos granitos de arena que de a poco
logran construir grandes cosas.</p>
</div>

<div id="David" class="w3-container person">
  <br>
  <img class="w3-round w3-animate-top" src="/img/avatar4.jpg" style="width:20%;">
  <h5 class="w3-opacity">Ferran Mart?? Paulo</h5>
  <h4><i class="fa fa-clock-o"></i> Jul 19, 2019.</h4>
  <hr>
  <p>En nombre de Ferran Mart?? Paulo, de 33 a??os, recibi?? el Premio Fundaci??n Esplai a la Ciudadan??a Comprometida en el a??o 2014, en la categor??a ??Trabajo por la E-inclusi??n??, por ser impulsor de diferentes iniciativas
       relacionadas con las tecnolog??as y por su capacidad para adaptarlas a las necesidades de su territorio (Burjassot, en Valencia) e implicar a la poblaci??n. Se destaca su trabajo en el proyecto Becamos, dirigido 
       a la empleabilidad de los y las j??venes.</p>
</div>

<div id="Josue" class="w3-container person">
  <br>
  <img class="w3-round  w3-animate-top" src="/img/avatar5.png" style="width:20%;">
  <h5 class="w3-opacity">Elian Delgado</h5>
  <h4><i class="fa fa-clock-o"></i> Sep 17, 2021.</h4>
  <hr>
  <p>Tengo 18 a??os y comenc?? a hacer voluntariado desde marzo del 2016. Todo comenz?? cuando decid?? ser parte del grupo estudiantil en mi prepa, no sab??a ni qu?? era, ni qu?? hac??an,
pero quise entrar.</p>
  <p>Decid?? quedarme cuando me di cuenta de que exist??an asentamientos humanos a 12 minutos de mi casa y que ahora exist??a la posibilidad de hacer algo al respecto. Lo que m??s me
gusta del voluntariado es conocer y trabajar junto a personas; escuchar las historias de los vecinos y de los voluntarios.</p>
  <p>El voluntariado me ha encaminado a conocer muchas personas que hoy considero familia. He aprendido que existe una desigualdad muy grande, sin embargo, podemos hacer cosas
desde nuestra trinchera y cambiar la direcci??n de las cosas.</p>
<p>El voluntariado deja cosas plasmadas en ti de por vida, es una oportunidad verdadera de conocer la realidad de los asentamientos y hacer algo al respecto.</p>
</div>
</div>

<script>
var openInbox = document.getElementById("myBtn");
openInbox.click();

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

function myFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show"; 
    x.previousElementSibling.className += " w3-red";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-red", "");
  }
}

openMail("Borge")
function openMail(personName) {
  var i;
  var x = document.getElementsByClassName("person");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x = document.getElementsByClassName("test");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" w3-light-grey", "");
  }
  document.getElementById(personName).style.display = "block";
  event.currentTarget.className += " w3-light-grey";
}
</script>

<script>
var openTab = document.getElementById("firstTab");
openTab.click();
</script>

</body>
</html> 


@endsection