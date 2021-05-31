@extends('layout_voluntarios')

@section('contenid')

<link href="/css/informate.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<body>

    <div class="row py-5 animate__animated animate__fadeInLeft">
        <div class="col">
            <h5 class="text-center">Tipos de voluntariado</h5>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card bg-light">
                <img src="img/ambiental.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                   <h5> <a href="#ambiente">Voluntariado ambiental</a> </h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-light">
                <img src="img/educa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5>  <a href="#comunitario">Voluntariado comunitario</a> </h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-light">
                <img src="img/social.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5>  <a href="#cultural">Voluntariado cultural</a> </h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-light">
                <img src="img/PC.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                   <h5> <a href="#deportivo">Voluntariado deportivo</a> </h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-light">
                <img src="img/Comunit.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5> <a href="#educativo">Voluntariado educativo</a> </h5> 
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-light">
                <img src="img/sociosa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5>  <a href="#social">Voluntariado social</a> </h5>
                </div>
            </div>
        </div>
    </div>


<!--tipos voluntarios-->


    <main class="animate__animated animate__fadeInLeft">

<section id=test>
    <h5>TIPOS DE VOLUNTARIOS</h5>
</section>


<section id="testimonials" class="section-bg">
    <div class="container">

        <header class="section-header">
            <h3>Tipos de voluntarios</h3>
        </header>

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="owl-carousel testimonials-carousel wow fadeInUp">

                    <div class="testimonial-item">
                        <!-- <img src="img/testimonial-1.jpg" class="testimonial-img" alt=""> -->
                        <h3 class="animate__animated animate__bounce" id="ambiente">1. Voluntariado ambiental</h3>
                        <p>
                        ¿Te interesa la protección y recuperación de especies o espacios naturales? ¿El cuidado de los animales? ¿El desarrollo de una conciencia medioambiental? Con el voluntariado ambiental puedes implicarte directamente en la conservación del medio ambiente y la sensibilización de la población respecto a la naturaleza, la sostenibilidad y el equilibrio ecológico del planeta. En este campo hay proyectos de acción local y proyectos globales de ámbito internacional.
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <!-- <img src="img/testimonial-2.jpg" class="testimonial-img" alt=""> -->
                        <h3 id="comunitario">2. Voluntariado comunitario</h3>
                        <p>
                        Mediante el voluntariado comunitario se promueven y se participa en movimientos cívicos, vecinales, colectivos y de participación ciudadana para el desarrollo y la cohesión de la comunidad. Participando en proyectos de voluntariado comunitario puedes incidir en tu propia comunidad mediante actividades educativas, de ocio y tiempo libre, recreativas, deportivas, culturales,…
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <!-- <img src="img/testimonial-2.jpg" class="testimonial-img" alt=""> -->
                        <h3 id="cultural">3. Voluntariado cultural</h3>
                        <p>
                        En le marco del voluntariado cultural puedes participar en proyectos muy diversos relacionados con trabajos de recuperación, conservación o difusión de la identidad cultural e histórica, la promoción de la creatividad y la difusión de los bienes culturales y el patrimonio histórico. En este contexto, puedes ser voluntario/a en un museo, en actos festivos de la comunidad, en una excavación arqueológica, en una biblioteca, en un monumento histórico,…
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <!-- <img src="img/testimonial-2.jpg" class="testimonial-img" alt=""> -->
                        <h3 id="deportivo">4. Voluntariado deportivo</h3>
                        <p>
                        ¿Te gustaría participar en la organización de eventos deportivos? ¿O colaborar en un club deportivo en sus actividades periódicas? El voluntariado deportivo favorece la integración social de las personas de una comunidad y te ofrece, como voluntario/a, la posibilidad de vincularte con el deporte mediante tu acción altruista. ¿Te animas?
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <!-- <img src="img/testimonial-2.jpg" class="testimonial-img" alt=""> -->
                        <h3 id="educativo">5. Voluntariado educativo</h3>
                        <p>
                        ¿Te gustaría participar en la organización de eventos deportivos? ¿O colaborar en un club deportivo en sus actividades periódicas? El voluntariado deportivo favorece la integración social de las personas de una comunidad y te ofrece, como voluntario/a, la posibilidad de vincularte con el deporte mediante tu acción altruista. ¿Te animas?
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <!-- <img src="img/testimonial-2.jpg" class="testimonial-img" alt=""> -->
                        <h3 id="social">6. Voluntariado social</h3>
                        <p>
                        El voluntariado social es uno de los más desarrollados en nuestra sociedad. Es un tipo de voluntariado muy cercano a las personas destinatarias de los proyectos: personas con adicciones, personas discapacitadas, niños y niñas, jóvenes, familias, inmigrantes y refugiados/as, reclusos/as y ex-reclusos/as, personas sin hogar, personas mayores,…
                        </p>
                    </div>
                  </div>
              </div>
          </div>
          </header>
            </div>
        </section><!-- #end -->

    </main>

    
</body>


@endsection