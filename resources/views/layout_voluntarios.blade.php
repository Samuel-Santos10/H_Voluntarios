<!DOCTYPE html>
<html lang="en">
<title>Heroes Voluntarios</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<style>
body,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Lato", sans-serif
}

.w3-bar,
h1,
button {
    font-family: "Montserrat", sans-serif
}

.fa-check-square,
.fa-book {
    font-size: 200px
}
</style>

<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-red w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red"
                href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i
                    class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
            <a href="#DerechosDeberes" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Derechos/Deberes</a>
            <a href="#HistoriasVoluntarios" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Historias voluntarios</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Beneficios</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Tipos voluntarios</a>
            <a href="/informate" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Informate</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
        </div>
    </div>

    <!-- Header -->
    <header class="w3-container w3-black w3-center" style="padding:40px 16px" id="DerechosDeberes">
        <h6 class="w3-margin w3-jumbo">Derechos/Deberes</h6>
    </header>


    <!--  Grid Derechos-->
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-third w3-center">
                <i class="fa fa-book w3-padding-64 w3-text-black w3-margin-right"></i>
            </div>

            <!--Contenido Derechos-->

            <div class="w3-twothird">
                <h1>Derechos</h1>
                <ul>
                    <li>
                        <h5 class="w3-padding-32">Primero</h5>
                        <p class="w3-text-grey">Recibir, tanto con carácter inicial como permanente, la información,
                            formación,orientación, apoyo y, en su caso, medios materiales necesarios para el ejercicio
                            de las funciones que se te asignen.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Segundo</h5>
                        <p class="w3-text-grey">Participar activamente en la organización en que te insertes,
                            colaborando en la
                            elaboración, diseño,
                            ejecucióny evaluación de los programas, de acuerdo con sus estatutos o normas de
                            aplicación.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Tercero</h5>
                        <p class="w3-text-grey">Ser asegurada contra los riesgos de accidente y enfermedad derivados
                            directamente
                            del ejercicio de
                            la actividadvoluntaria, con las características y por los capitales asegurados que
                            se establezcan
                            reglamentariamente.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Cuarto</h5>
                        <p class="w3-text-grey">Ser reembolsada/o por los gastos realizados en el desempeño de tus
                            actividades.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Quinto</h5>
                        <p class="w3-text-grey"> Disponer de una acreditación identificativa de tu condición de persona
                            voluntaria.</p>
                    </li>

                </ul>

            </div>
        </div>
    </div>

    <!--Grid Deberes-->
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
        <div class="w3-content">

            <!--Contenido Derechos-->
            <div class="w3-twothird">

                <h1>Deberes</h1>

                <h5>¿Ya sabes qué implica y a qué compromete esto de ser voluntario/a?</h5>

                <h5>Según la ley de voluntariado, las personas voluntarias están obligadas a:</h5>
              
                <ul>
                    <li>
                        <h5 class="w3-padding-32">Primero</h5>
                        <p class="w3-text-grey">Cumplir los compromisos adquiridos con las organizaciones en las que se integren, respetando los fines y la normativa de las mismas.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Segundo</h5>
                        <p class="w3-text-grey">Guardar, cuando proceda, confidencialidad de la información recibida yconocida en el desarrollo de su actividad voluntaria.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Tercero</h5>
                        <p class="w3-text-grey">Rechazar cualquier contraprestación material que pudieran recibir bien del beneficiario/a o de otras personas relacionadas con su acción.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Cuarto</h5>
                        <p class="w3-text-grey">Rechazar cualquier contraprestación material que pudieran recibir bien del beneficiario/a o de otras personas relacionadas con su acción.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Quinto</h5>
                        <p class="w3-text-grey">Actuar de forma diligente y solidaria.</p>
                    </li>
                </ul>

            </div>
            <div class="w3-third w3-center">
                <i class="fa fa-check-square w3-padding-64 w3-text-black"></i>
            </div>
        </div>
    </div>


        <!--Divicion Historias de Voluntarios -->
   <!-- Header -->
   <header class="w3-container w3-black w3-center" style="padding:10px 16px" id="HistoriasVoluntarios">
        <h6 class="w3-margin w3-jumbo">Historias voluntarios</h6>
    </header>

    <!--Grid Historias Voluntarios-->

<div class="w3-row-padding w3-light-blue w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
    </div>
    <div class="w3-twothird">
       <!-- Posts -->
  <div class="w3-card w3-black w3-margin">
    <div class="w3-container w3-padding">
      <h4>Historias</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="img/avatar.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Manuel de los Ángeles</span><br>
        <span>En nombre de Manuel de los Ángeles Vargas, de 23 años, recibió el Premio Fundación Esplai a la Ciudadanía Comprometida en el año 2015, en la categoría «Trabajo por la E-inclusión», por su labor voluntaria en el telecentro Red Conecta de Jovesolides, en Paterna-Valencia, en el barrio de La Coma.
         Por el cariño, entusiasmo, actitud de superación y responsabilidad que el joven pone en cada una de las actividades en las que participa.</span>
      </li>
      <li class="w3-padding-16">
        <img src="img/avatar.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Ipsum</span><br>
        <span>Praes tinci sed</span>
      </li> 
      <li class="w3-padding-16">
        <img src="img/avatar.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Dorum</span><br>
        <span>Ultricies congue</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="img/avatar.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li>  
    </ul>
  </div>
         <!-- Posts -->
    </div>
  </div>
</div>


    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-16">
        <p>
        <h3>HEROES VOLUNTARIOS</h3>
        </p>
    </footer>

    <script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>

</body>

</html>