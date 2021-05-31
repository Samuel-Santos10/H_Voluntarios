@extends('Empresa1')

@section('conteni')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="/css/quienes.css" rel="stylesheet">
</head>

<body>
    <div id="main-container">
        <header class="animate__animated animate__fadeInLeft">

            <main class="menu">
                <div class="text">
                    <h3>Misión - Visión</h3>
                    <p>
                         Nuestra misión como empresa es realizar, diseñar software de calidad, para que<br>
                        nuestros clientes tengan la certeza de que somos una empresa de confianza<br>
                        con la cual ellos puedan confiarnos sus productos.<br>
                    </p>

                    <p>
                        Como empresa tenemos como visión ser una entidad en la cual siempre este<br>
                        familiarizada y realizando software con tecnologias nuevas que van surgiendo<br>
                        esto con el unico fin de que nuestros clientes obtengan productos con tenologias<br>
                        emergentes.
                    </p>
                </div>

                <div class="image">
                    <img src="img/a.png" width="450" />
                </div>
            </main>

            <div class="container">
                <div class="row row-cols-2">
                    <div class="col">Valores</div>
                    <div class="col">Principios</div>
                    <div class="col">Confianza</div>
                    <div class="col">Igualdad</div>
                    <div class="col">Compromiso</div>
                    <div class="col">Derecho</div>
                    <div class="col">Organización</div>
                    <div class="col">Transparencia</div>
                    <div class="col">Respeto</div>
                    <div class="col">Eficiencia</div>
                    <div class="col">Colaboración</div>
                    <div class="col">Honestidad</div>
                    <div class="col">Empatía</div>
                    <div class="col">Trabajo en equipo</div>
                    <div class="col">Comunicación</div>
                    <div class="col"></div>
                    <div class="col">Responsabilidad</div>
                </div>
            </div>

            <!--******************************************************************************-->

            <div class="row py-2">
                <div class="col">
                    <br>
                    <br>
                    <h6 class="text-center">-La esencia de la vida es servir a los demás y hacer el bien.-Aristóteles.
                    <br>
                    <br>   
                    </h6>
                </div>
            </div>

            <div id="amiibos" class="px-5 pb-5 bg-success">
                <div class="container">
                    <div class="row">
                        <h2 class="text-center text-white text-shadow h1">¿QUIENES SOMOS?</h2>
                    </div>
                    <div class="row row-cols-1 row-cols-2 row-cols-sm-2 row-cols-md-4">
                        <div class="col-sm">
                            <img src="img/figure01.png" alt="" class="w-100 amiibo animate__animated animate__bounce animate__infinite">
                            <div class="text-center"><span class="amiibo-name h5 p-2">Carolina</span></div>
                        </div>
                        <div class="col-sm">
                            <img src="img/figure02.png" alt="" class="w-100 amiibo animate__animated animate__bounce animate__infinite">
                            <div class="text-center"><span class="amiibo-name h5 p-2">Carlos</span></div>
                        </div>
                        <div class="col-sm">
                            <img src="img/figure03.png" alt="" class="w-100 amiibo animate__animated animate__bounce animate__infinite">
                            <div class="text-center"><span class="amiibo-name h5 p-2">Josué</span></div>
                        </div>
                        <div class="col-sm">
                            <img src="img/figure01.png" alt="" class="w-100 amiibo animate__animated animate__bounce animate__infinite">
                            <div class="text-center"><span class="amiibo-name h5 p-2">Jenny</span></div>
                        </div>
                    </div>

                    <div class="row py-5">
                        <div class="col text-center">

                            <p>Somos un equipo enfocado a crear una herramienta de ayuda cuyo objetivo es conectar a las
                                empresas y organizaciones que ofrecen programas de <br> voluntariado en El Salvador con
                                jóvenes y adultos que puedan ser voluntarios, orientándolos mediante una plataforma
                                informática en la cual tengan acceso a información <br> de las problemáticas de los
                                ciudadanos, que conozcan las áreas de voluntario que ofrecen las empresas y que puedan
                                registrarse en los programas que estas ofrecen </p>

                        </div>
                    </div>


                    <div class="row py-2">
                        <div class="col">
                            <h6 class="text-center">“Mucha gente pequeña, en lugares pequeños, haciendo cosas pequeñas,
                                puede cambiar el mundo.” Eduardo Galeano.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</body>

<!--    <div class="col-12 align-self-center text-center">
                <h3>MISION - VISION</h3>
                
                
            <p> <h5>MISION</h5>
                Extender nuestro conocimiento en el área de desarrollo software con el uso de frameworks ágiles trabajando en base a la armonía y<br> comunicación en el equipo de trabajo. <br>
                <br>
                <h5>VISION</h5>
                Ser un equipo distinguido, multifuncional y motivador que desarrolle un producto funcional que nos enorgullezca como equipo <br>teniendo siempre presente nuestros principios y valores.
            </p>

            </div>

            <div class="col-12 align-self-center" class="valores">
                <h5>VALORES</h5>
            <ul> 
                <li>Confianza</li>
                <li>Compromiso</li>
                <li>Organización</li>
                <li>Respeto</li>
                <li>Colaboración</li>
                <li>Empatía</li>
                <li>Comunicación</li>
                <li>Responsabilidad</li>
            </ul>
            </div>

         

            <div class="col-12 align-self-center" class="valores">
                <h5>PRINCIPIOS</h5>
            <ul> 
                <li>Igualdad </li>
                <li>Derecho </li>
                <li>Transparencia </li>
                <li>Eficiencia </li>
                <li>Honestidad </li>
                <li>Trabajo en equipo</li>
            </ul>
            </div>

            <div class="row py-2">
            <div class="col">
              <h6 class="text-center">-La esencia de la vida es servir a los demás y hacer el bien.-Aristóteles.</h6>
            </div>
          </div>

    <div id="amiibos" class="px-5 pb-5 bg-success">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-white text-shadow h1">¿QUIENES SOMOS?</h2>
            </div>
            <div class="row row-cols-1 row-cols-2 row-cols-sm-2 row-cols-md-4">
                <div class="col-sm">
                  <img src="img/figure01.png" alt="" class="w-100 amiibo">
                  <div class="text-center"><span class="amiibo-name h5 p-2">Isabelle</span></div>
                </div>
                <div class="col-sm">
                  <img src="img/figure02.png" alt="" class="w-100 amiibo">
                  <div class="text-center"><span class="amiibo-name h5 p-2">Kapp'n</span></div>
                </div>
                <div class="col-sm">
                  <img src="img/figure03.png" alt="" class="w-100 amiibo">
                  <div class="text-center"><span class="amiibo-name h5 p-2">Rover</span></div>
                </div>
            </div>
            
            <div class="row py-5">
              <div class="col text-center">
                        
                        <p>Somos un equipo enfocado a crear una herramienta de ayuda cuyo objetivo es conectar a las empresas y  organizaciones que ofrecen programas de <br> voluntariado en El Salvador con jóvenes y adultos que puedan ser voluntarios, orientándolos mediante una plataforma informática en la cual tengan acceso a información <br> de las problemáticas de los ciudadanos, que conozcan las áreas de voluntario que ofrecen las empresas y que puedan registrarse en los programas que estas ofrecen </p>

                </div>   
            </div>
    

        <div class="row py-2">
           <div class="col">
              <h6 class="text-center">“Mucha gente pequeña, en lugares pequeños, haciendo cosas pequeñas, puede cambiar el mundo.” Eduardo Galeano.</h6>
          </div>
       </div>  
-->

@endsection