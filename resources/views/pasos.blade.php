@extends('layout_END')
@section('ayuda')
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="../css/pasos.css">
    <title>Pasos</title>
</head>

<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Raleway", sans-serif
    }
    </style>

<body class="w3-light-grey">
    <form id="new_post_container" class="new_post_container">
        <div class="w3-content" style="max-width:1100px ">

            <!-- Header -->
            <header class="w3-container w3-center w3-padding-32">
                <h1><b>6 pasos para un voluntarios</b></h1>
                <h4>Aqui aprenderas algunos pasos para ser <span class="w3-tag">Voluntario/a</span></h4>
            </header>

            <!-- Grid -->
            <div class="w3-row">

                <!-- Blog entries -->
                <div class="w3-col l8 s12">
                    <!-- Blog entry -->
                    <div class="w3-card-4 w3-margin w3-white">
                        <img src="/img/in1.jfif" alt="Nature" style="width:100%">
                        <div class="w3-container">
                            <h3><b>1. Piensa</b></h3>
                            <h5>¿Que te mueve?</h5>
                        </div>

                        <div class="w3-container">
                            <p>Quizás sean tus ideas, tus valores, la solidaridad, la indignación ante la injusticia, la
                                necesidad de hacer algo útil, tu amor por la naturaleza o las ganas de cambiar el mundo.
                            </p>
                        </div>
                    </div>
                    <hr>

                    <!-- Blog entry -->
                    <div class="w3-card-4 w3-margin w3-white">
                        <img src="/img/in2.jfif" alt="Norway" style="width:100%">
                        <div class="w3-container">
                            <h3><b>2. Mira</b></h3>
                            <h5>¿Qué necesidades y problemas hay en tu entorno?</h5>
                        </div>

                        <div class="w3-container">
                            <p>Seguro que muy cerca de de ti se necesitan tu solidaridad y tus ganas de regalar tiempo.
                            </p>
                            <div class="w3-row">
                                <div class="w3-col m8 s12">
                                    <p><button id="morado" class="w3-button w3-padding-large"><a href="/layout_voluntarios">Descubre diferentes tipos de voluntariado</a></button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="w3-card-4 w3-margin w3-white">
                        <img src="/img/in3.jfif" alt="Nature" style="width:100%">
                        <div class="w3-container">
                            <h3><b>3. Valora</b></h3>
                            <h5>¿Qué puedes hacer tú?</h5>
                        </div>

                        <div class="w3-container">
                            <p>¡Millones de cosas!
                                Toda depende de tu disponibilidad, tus capacidades y tus intereses.</p>
                            <div class="w3-row">
                                <div class="w3-col m8 s12">
                                    <p><button id="morado" class="w3-button w3-padding-large"><a href="/historias">Descubre que hacen otros voluntarios/as</a></button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <!-- Blog entry -->
                    <div class="w3-card-4 w3-margin w3-white">
                        <img src="/img/in4.jfif" alt="Norway" style="width:100%">
                        <div class="w3-container">
                            <h3><b>4. CONTACTA</b></h3>
                            <h5>¿Con qué organización quieres colaborar?</h5>
                        </div>

                        <div class="w3-container">
                            <p>Hay muchísimas organizaciones que necesitan voluntarios/as com tú, sólo tienes que
                                encontrar la que te enamore.</p>
                            <div class="w3-row">
                                <div class="w3-col m8 s12">
                                     <p><button id="morado" class="w3-button w3-padding-large"><a href="/layout_empresas">Encuentra y contacta con una ONG</a></button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="w3-card-4 w3-margin w3-white">
                        <img src="/img/in5.jfif" alt="Nature" style="width:100%">
                        <div class="w3-container">
                            <h3><b>5. Participa</b></h3>
                            <h5>¿Estás a punto para implicarte?</h5>
                        </div>

                        <div class="w3-container">
                            <p>Comprométete, entusiásmate, trabaja en el proyecto que has escogido y disfruta de la
                                experiencia.</p>
                            <div class="w3-row">
                                <div class="w3-col m8 s12">
                                    <p><button id="morado" class="w3-button w3-padding-large"><a href="/foro">Comparte tu experiencia en el foro</a></button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <!-- Blog entry -->
                    <div class="w3-card-4 w3-margin w3-white">
                        <img src="/img/in6.jfif" alt="Norway" style="width:100%">
                        <div class="w3-container">
                            <h3><b>6. Formate</b></h3>
                            <h5>¿Necesitas saber más?</h5>
                        </div>

                        <div class="w3-container">
                            <p>Quizás el proyecto que has escogido necesita habilidades o conocimientos específicos.
                                Fórmate para realizar mejor tu voluntariado.</p>
                            <div class="w3-row">
                                <div class="w3-col m8 s12">
                                    <p><button id="morado" class="w3-button w3-padding-large"><a href="/layout_voluntarios">Descubre los cursos que te pueden ayudar</a></button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END BLOG ENTRIES -->
                </div>
                <!-- END Introduction Menu -->
            </div>
            <!-- END GRID -->
        </div><br>
        <!-- END w3-content -->
        </div>
    </form>
</body>
<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-25 w3-margin-top">
    <h1 class="w3-margin-top">Heroes Voluntarios</h1>
</footer>

</html>
@endsection