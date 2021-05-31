@extends('layout_voluntarios')

@section('contenid')

<link href="/css/derechos.css" rel="stylesheet">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    
</head>

<body>
    <main class="animate__animated animate__fadeInLeft">

        <section id=test>
            <h5>NECESITAS AYUDA</h5>
        </section>


        <!--==========================
      Derechos Section
    ============================-->
        <section id="testimonials" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Pasos para ser voluntarios</h3>
                </header>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="owl-carousel testimonials-carousel wow fadeInUp">

                            <div class="testimonial-item">
                                <!-- <img src="img/testimonial-1.jpg" class="testimonial-img" alt=""> -->
                                <h3 class="animate__animated animate__bounce">1. PIENSA</h3>
                                <p>
                                    ¿Qué te mueve? <br>
                                    Quizás sean tus ideas, tus valores, la solidaridad, la indignación ante la
                                    injusticia, la necesidad de hacer algo útil, tu amor por la naturaleza o las ganas
                                    de cambiar el mundo.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <!-- <img src="img/testimonial-2.jpg" class="testimonial-img" alt=""> -->
                                <h3>2. MIRA</h3>
                                <p>
                                    ¿Qué necesidades y problemas hay en tu entorno? <br>
                                    Seguro que muy cerca de de ti se necesitan tu solidaridad y tus ganas de regalar
                                    tiempo.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <!--  <img src="img/testimonial-3.jpg" class="testimonial-img" alt=""> -->
                                <h3>3. VALORA</h3>
                                <p>
                                    ¿Qué puedes hacer tú? <br>
                                    ¡Millones de cosas!
                                    Toda depende de tu disponibilidad, tus capacidades y tus intereses.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <!-- <img src="img/testimonial-5.jpg" class="testimonial-img" alt=""> -->
                                <h3>4. CONTACTA</h3>
                                <p>
                                    ¿Con qué organización quieres colaborar? <br>
                                    Hay muchísimas organizaciones que necesitan voluntarios/as com tú, sólo tienes que
                                    encontrar la que te enamore.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <!-- <img src="img/testimonial-5.jpg" class="testimonial-img" alt=""> -->
                                <h3>5. Participa</h3>
                                <p>
                                    ¿Estás a punto para implicarte? <br>
                                    Comprométete, entusiásmate, trabaja en el proyecto que has escogido y disfruta de la
                                    experiencia.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <!-- <img src="img/testimonial-5.jpg" class="testimonial-img" alt=""> -->
                                <h3>6. FÓRMATE</h3>
                                <p>
                                    ¿Necesitas saber más? <br>
                                    Quizás el proyecto que has escogido necesita habilidades o conocimientos
                                    específicos. Fórmate para realizar mejor tu voluntariado.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- PREGUNTAS -->

                <header class="section-header">
                    <h3>Preguntas frecuentes</h3>

                    <!-- ACCORDION -->

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    ¿Cuál es la definición de persona voluntaria?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Una persona voluntaria es la que, por elección propia, dedica una parte de su tiempo a la acción solidaria y altruista, sin recibir remuneración por ello.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    ¿Qué hacen las personas voluntarias?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">¡De todo!
                                Las personas voluntarias pueden hacer tareas muy diversas. Depende del tipo de organización y del tipo de voluntariado en el que se participa.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    ¿Qué tipos de voluntariado hay?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Los tipos de voluntariado o campos de acción voluntaria se pueden definir de muchas maneras diferentes. La Ley del voluntariado del 2015 establece 10 ámbitos temáticos diferentes.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Si soy menor, ¿puedo hacer voluntariado?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">En principio, la Ley del voluntariado dispone que las personas voluntarias deben ser mayores de 18 años. Sin embargo, si la organización está de acuerdo, tu familia puede firmarte un consentimiento.</div>
                            </div>
                        </div>
                    </div>

                    <!-- ACCORDION -->

                </header>
            </div>
        </section><!-- #end -->

    </main>


    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <h2 class="animate__animated animate__bounce animate__infinite">Heroes voluntarios</h2>
                </div>
            </div>
        </div>
    </footer><!-- #footer -->
</body>


@endsection