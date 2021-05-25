@extends('layout')

@section('contenidos')

<link href="/css/home1.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



<!-- contenido o codigo de home -->


<body>

    <div class="col-12 align-self-center text-center">
        <img src="{{asset('img/loogo.jpg')}}" class="img-fluid" width="200px" alt="fgf">
    </div>
    <header class="container-fluid">
        <div class="row" style="height:170px; background-color:#A5FAE7">
            <div class="col-12 align-self-center text-center">
                <h3>¿QUÉ HACEMOS?</h3>
                <p>La Fundación Internacional de Jóvenes Líderes es una entidad conformada por diversos referentes
                    mundiales
                    que <br> buscan brindar herramientas de desarrollo a las nuevas generaciones. Trabajamos en
                    programas
                    que estimulan el espíritu <br> emprendedor y de liderazgo. En ese camino ofrecemos becas de estudio,
                    jornadas de networking y voluntariado <br> social. Asimismo, propiciamos la emisión de informes
                    sobre
                    problemáticas relacionadas con el sector. </p>
            </div>
        </div>
        </div>

      

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="mainSlider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/Pedir-ayuda.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/ayudando.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/ayuda.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
</body>

@endsection