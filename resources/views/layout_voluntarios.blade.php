<!DOCTYPE html>
<html lang="en">

<head>
    <title>Heroes Voluntarios</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="/css/cards.css" rel="stylesheet">

    <link href="/css/informate.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/botones.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

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
.fa-book,
.fa-medal {
    font-size: 200px
}
</style>

<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-red w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red"
                href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><em
                    class="fa fa-bars"></em></a>
            <a href="/" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
            <a href="#DerechosDeberes"
                class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Derechos/Deberes</a>
            <a href="#beneficios"
                class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Beneficios</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Tipos
                voluntarios</a>
            <a href="#informate"
                class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Informate</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#DerechosDeberes" class="w3-bar-item w3-button w3-padding-large">Derechos/Deberes</a>
            <a href="#HistoriasVoluntarios" class="w3-bar-item w3-button w3-padding-large">Historias voluntarios</a>
            <a href="#beneficios" class="w3-bar-item w3-button w3-padding-large">Beneficios</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Tipos voluntarios</a>
            <a href="#informate" class="w3-bar-item w3-button w3-padding-large">Informate</a>
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
                <em class="fa fa-book w3-padding-64 w3-text-black w3-margin-right"></em>
            </div>

            <!--Contenido Derechos-->

            <div class="w3-twothird">
                <h1>Derechos</h1>
                <ul>
                    <li>
                        <h5 class="w3-padding-32">Primero</h5>
                        <p class="w3-text-grey">Recibir, tanto con car??cter inicial como permanente, la informaci??n,
                            formaci??n,orientaci??n, apoyo y, en su caso, medios materiales necesarios para el ejercicio
                            de las funciones que se te asignen.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Segundo</h5>
                        <p class="w3-text-grey">Participar activamente en la organizaci??n en que te insertes,
                            colaborando en la
                            elaboraci??n, dise??o,
                            ejecuci??ny evaluaci??n de los programas, de acuerdo con sus estatutos o normas de
                            aplicaci??n.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Tercero</h5>
                        <p class="w3-text-grey">Ser asegurada contra los riesgos de accidente y enfermedad derivados
                            directamente
                            del ejercicio de
                            la actividadvoluntaria, con las caracter??sticas y por los capitales asegurados que
                            se establezcan
                            reglamentariamente.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Cuarto</h5>
                        <p class="w3-text-grey">Ser reembolsada/o por los gastos realizados en el desempe??o de tus
                            actividades.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Quinto</h5>
                        <p class="w3-text-grey"> Disponer de una acreditaci??n identificativa de tu condici??n de persona
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

                <h5>??Ya sabes qu?? implica y a qu?? compromete esto de ser voluntario/a?</h5>

                <h5>Seg??n la ley de voluntariado, las personas voluntarias est??n obligadas a:</h5>

                <ul>
                    <li>
                        <h5 class="w3-padding-32">Primero</h5>
                        <p class="w3-text-grey">Cumplir los compromisos adquiridos con las organizaciones en las que se
                            integren, respetando los fines y la normativa de las mismas.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Segundo</h5>
                        <p class="w3-text-grey">Guardar, cuando proceda, confidencialidad de la informaci??n recibida
                            yconocida en el desarrollo de su actividad voluntaria.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Tercero</h5>
                        <p class="w3-text-grey">Rechazar cualquier contraprestaci??n material que pudieran recibir bien
                            del beneficiario/a o de otras personas relacionadas con su acci??n.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Cuarto</h5>
                        <p class="w3-text-grey">Rechazar cualquier contraprestaci??n material que pudieran recibir bien
                            del beneficiario/a o de otras personas relacionadas con su acci??n.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Quinto</h5>
                        <p class="w3-text-grey">Actuar de forma diligente y solidaria.</p>
                    </li>
                </ul>

            </div>
            <div class="w3-third w3-center">
                <em class="fa fa-check-square w3-padding-64 w3-text-black"></em>
            </div>
        </div>
    </div>

    <!--Divicion BENEFICIOS -->

    <!-- Header -->
    <header class="w3-container w3-black w3-center" style="padding:10px 16px" id="beneficios">
        <h6 class="w3-margin w3-jumbo">Beneficios</h6>
    </header>

    <!--Grid BENEFICIOS-->

    <div class="w3-row-padding w3-sand w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-third w3-center">
                <em class="fa fa-medal w3-padding-64 w3-text-black w3-margin-right"></em>
            </div>

            <!--Contenido BENEFICIOS-->

            <div class="w3-twothird">

                <ol>
                    <li>
                        <h5 class="w3-padding-32">Sentirte ??til</h5>
                        <p class="w3-text-grey">Cuando te conviertes en voluntario o voluntaria te sientes ??til. Te das
                            cuenta de que tus acciones, tus tareas como voluntario/a tienen un objetivo y ayudan a otras
                            personas o al medio ambiente.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Crear lazos con tu comunidad</h5>
                        <p class="w3-text-grey">??Te gusta trabajar con otras personas, codo con codo, sumando fuerzas,
                            compartiendo experiencias y aprendiendo unas de otras, caminando y creciendo juntas? Cuando
                            te conviertes en voluntario o voluntaria de una organizaci??n de tu comunidad conoces gente
                            diferente y aprendes a sumar esfuerzos para conseguir un objetivo. ??Quiz??s haciendo
                            voluntariado har??s buenos amigos y amigas!.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Poner a prueba tus capacidades</h5>
                        <p class="w3-text-grey">No es lo mismo aprender de un libro que de la vida real. Cuando haces
                            voluntariado te sumerges en la experiencia y aplicas tus conocimientos y capacidades. A??ade
                            tu experiencia de voluntariado en el CV o curr??culo, las empresas o ONGs por las que te
                            gustar??a trabajar seguro que valoraran positivamente todo lo que has aprendido siendo
                            voluntario/a.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Aprender de la sociedad que te rodea</h5>
                        <p class="w3-text-grey">Las personas vivimos en sociedad, es nuestra naturaleza. Cuando haces
                            voluntariado social, aprendes mucho de la sociedad que te rodea y se agudiza tu sensibilidad
                            por los problemas sociales. Comprom??tete como voluntario o voluntaria para comprender el
                            mundo y enriquecer tu punto de vista.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Mejorar tu autoestima y generosidad</h5>
                        <p class="w3-text-grey"> Convertirse en voluntario/a quiere decir implicarse, sentirse ??til,
                            sentirse parte de algo, sentirse necesario. Estos sentimientos mejoran la autoestima y el
                            concepto de uno mismo, al mismo tiempo que nos ayudan a salir un poco de nosotros mismos/as,
                            suavizar el egocentrismo que reina en nuestras vidas y ser m??s generosos/as.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Estar en forma</h5>
                        <p class="w3-text-grey">Seg??n recientes estudios cient??ficos, el trabajo voluntario mejora
                            nuestra salud f??sica y mental, baja la tasa de mortalidad, disminuye el riesgo de depresi??n
                            y otras enfermedades mentales, mejora los niveles de colesterol y la salud cardiovascular,
                            entre otros. Adem??s, estos beneficios para la salud se ver??n potenciados si nuestras tareas
                            como voluntaria o voluntario incluyen actividades f??sicas como se puede dar en algunos tipos
                            de voluntariado como en el voluntariado deportivo, ambiental, de ocio y tiempo libre, de
                            protecci??n civil o el voluntariado cultural.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Convertirte en agente de cambio</h5>
                        <p class="w3-text-grey">??Quieres cambiar el mundo? ??Poner tu granito de arena para que mejoren
                            las cosas? ??Para acabar con el sufrimiento y la injusticia? Haci??ndote voluntario o
                            voluntaria puedes convertirte en agente de este cambio que tanto anhelas. Hacer voluntariado
                            quiere decir sumar fuerzas para mejorar la sociedad o el medio ambiente.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Actuar siguiendo tus valores ideol??gicos</h5>
                        <p class="w3-text-grey">??Tienes muy claros tus valores ideol??gicos o religiosos y quieres
                            ponerlos en pr??ctica? Cuando eres voluntario o voluntaria te rigen valores como la
                            generosidad, la solidaridad, el altruismo, la sostenibilidad, la justicia, la fraternidad,
                            la empat??a, los derechos humanos, la igualdad, la libertad, la honestidad, la tolerancia, la
                            sinceridad, la utop??a???.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Proteger la naturaleza</h5>
                        <p class="w3-text-grey">??Te duele ver como se est?? deteriorando nuestro planeta? Hacerte
                            voluntario de una organizaci??n que desarrolle programas de voluntariado ambiental es una
                            manera de contribuir a la protecci??n y cuidado del medio ambiente.</p>
                    </li>

                    <li>
                        <h5 class="w3-padding-32">Pasarlo bien</h5>
                        <p class="w3-text-grey">??No todo es trabajo y esfuerzo! Haciendo voluntariado puedes divertirte
                            mucho, disfrutar, pasarlo bien en tu tiempo libre y hacer buenos amigos y amigas.</p>
                    </li>

                </ol>
            </div>
        </div>
    </div>

    <!--Grid BENEFICIOS-->







    <!--Divicion Contenidos Informate -->
    <!-- Header -->
    <header class="w3-container w3-black w3-center" style="padding:10px 16px" id="informate">
        <h6 class="w3-margin w3-jumbo">Informate</h6>
    </header>

    <!--Grid Informate-->

    <body>

        <div class="row row-cols-1 row-cols-md-3 g-3 mb-5 mt-5 mr-1 ml-1">
            <div class="col">
                <div class="card bg-light">
                    <img src="img/ambiental.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ambiental</h5>
                        <a href="/layout_informate_contenidos#ambiental" class="btn btn-primary">Ir ambiental</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-light">
                    <img src="img/educa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Educativo</h5>
                        <a href="layout_informate_contenidos#educativo" class="btn btn-primary">Ir educativo</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-light">
                    <img src="img/social.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Social</h5>
                        <a href="layout_informate_contenidos#social" class="btn btn-primary">Ir social</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-light">
                    <img src="img/PC.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Proteccion civil</h5>
                        <a href="layout_informate_contenidos#proteccion_civil" class="btn btn-primary">Ir proteccion
                            civil</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-light">
                    <img src="img/Comunit.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Comunitario</h5>
                        <a href="layout_informate_contenidos#comunitario" class="btn btn-primary">Ir comunitario</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-light">
                    <img src="img/sociosa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Socio-sanitario</h5>
                        <a href="socio_sanitario" class="btn btn-primary">Ir socio-sanitario</a>
                    </div>
                </div>
            </div>
        </div>
        <!--botones de text-->
        <a href="/testA" type="button" id="btn1" class="btn btn-info">Test evaluacion</a>
        <a href="/testB" type="button" id="btn2" class="btn btn-info">Test evaluacion</a>
        <a href="/testC" type="button" id="btn3" class="btn btn-info">Test evaluacion</a>
        <a href="/testD" type="button" id="btn4" class="btn btn-info">Test evaluacion</a>
        <a href="/testE" type="button" id="btn5" class="btn btn-info">Test evaluacion</a>
        <a href="/testF" type="button" id="btn6" class="btn btn-info">Test evaluacion</a>
    </body>

    <!--Grid Informate-->

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