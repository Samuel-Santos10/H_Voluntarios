
@extends('layout')

@section('contenidos')

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <div class="row py-5 animate__animated animate__fadeInLeft">
        <div class="col">
            <h5 class="text-center">Informate</h5>
        </div>
    </div>


    <div class="card-group animate__animated animate__fadeInLeft">
  <div class="card text-center" style="width: 18rem;">
    <img src="img/ambiental.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ambiental</h5>
      <a href="ambiental" class="btn btn-primary">Ir ambiental</a>
    </div>
  </div>
  <div class="card text-dark bg-light">
    <img src="img/educacion.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Educativo</h5>
      <a href="educativo" class="btn btn-primary">Ir educativo</a>
    </div>
  </div>
  <div class="card text-dark bg-light">
    <img src="img/sociall.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Social</h5>
      <a href="social" class="btn btn-primary">Ir social</a>
    </div>
  </div>
</div>

<div class="card-group animate__animated animate__fadeInLeft">
  <div class="card text-dark bg-light">
    <img src="img/proteccion.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Protección civil</h5>
            <a href="pro_civil" class="btn btn-primary">Ir proytección civil</a>
    </div>
  </div>
  <div class="card text-dark bg-light">
    <img src="img/comunitario.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Comunitario</h5>
            <a href="comunitario" class="btn btn-primary">Ir comunitario</a>
    </div>
  </div>
  <div class="card text-dark bg-light">
    <img src="img/sanitario.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Socio-sanitario</h5>
            <a href="socio_sanitario" class="btn btn-primary">Ir socio-sanitario</a>
    </div>
  </div>
</div>





@endsection