@extends('layout_voluntarios')

@section('contenid')


<link href="/css/informate.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<body>

    <div class="row py-5 animate__animated animate__fadeInLeft">
        <div class="col">
            <h5 class="text-center">TIPOS DE VOLUNTARIOS</h5>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card bg-light">
                <img src="img/ambiental.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Voluntariado Ambiental</h5>
                    <a href="evaluacion_ambiental" class="btn btn-primary">Ir ambiental</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-light">
                <img src="img/educa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Voluntariado Educativo</h5>
                    <a href="evaluacion_educativo" class="btn btn-primary">Ir educativo</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-light">
                <img src="img/social.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Voluntariado Social</h5>
                    <a href="evaluacion_social" class="btn btn-primary">Ir social</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-light">
                <img src="img/PC.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Voluntariado Proteccion civil</h5>
                    <a href="evaluacion_civil" class="btn btn-primary">Ir proteccion civil</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-light">
                <img src="img/Comunit.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Voluntariado Comunitario</h5>
                    <a href="evaluacion_comunitario" class="btn btn-primary">Ir comunitario</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-light">
                <img src="img/sociosa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Voluntariado Socio-sanitario</h5>
                    <a href="evaluacion_sanitario" class="btn btn-primary">Ir socio-sanitario</a>
                </div>
            </div>
        </div>
    </div>

</body>



@endsection