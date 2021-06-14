@extends('layout')

@section('contenidos')

<link href="/css/home1.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



<!-- contenido o codigo de home -->


<body>

    <div class="col-12 align-self-center text-center">

    <main class="animate__animated animate__fadeInLeft">

        <section id=test>
            <h1>Heroes voluntarios</h1>
        </section>

          <img src="{{asset('img/loogo.jpg')}}" class="img-fluid"alt="fgf">
    </div>
    <header class="container-fluid">
        <div class="row" style="height:170px; background-color:#A5FAE7">
            <div class="col-12 align-self-center text-center">
                <h3>¿QUÉ HACEMOS?</h3>
                <p> <h4>   Somos una empresa que brinda una herramienta a aquellas empresas y organizaciones para <br>
                    poder conectar a las diferentes empresas y personas que ofrecen servicios en El Salvador <br>
                    para que personas que quieran ofrecer sus servicios vean en esta herramienta que les estamos <br>
                    brindado una opcion para que estos puedan unirse al servicio de voluntariado.</h4> </p>
            </div>
        </div>
        </div>
      
    </main>

        <div class="container">
            <div class="row">
                <div class="">
                    <div id="mainSlider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/Pedir-ayuda.jpg" width="2500px" height="500px" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/ayudando.jpg" width="2500px" height="500px" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/ayuda.jpg" width="2500px" height="500px" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
</body>

@endsection