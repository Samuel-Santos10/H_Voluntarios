
@extends('layout')

@section('contenidos')

    <div class="row py-5">
        <div class="col">
            <h5 class="text-center">INFORMATE</h5>
        </div>
    </div>


    <div class="card-group">
  <div class="card text-center" style="width: 18rem;">
    <img src="img/ambiental.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">AMBIENTAL</h5>
      <a href="sub_menu1" class="btn btn-primary">IR AMBIENTAL</a>
    </div>
  </div>
  <div class="card text-dark bg-light">
    <img src="img/educacion.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">EDUCATIVO</h5>
      <a href="sub_menu2" class="btn btn-primary">IR EDUCATIVO</a>
    </div>
  </div>
  <div class="card text-dark bg-light">
    <img src="img/sociall.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">SOCIAL</h5>
      <a href="sub_menu3" class="btn btn-primary">IR SOCIAL</a>
    </div>
  </div>
</div>

<div class="card-group">
  <div class="card text-dark bg-light">
    <img src="img/proteccion.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">PROTECCION CIVIL</h5>
            <a href="sub_menu4" class="btn btn-primary">IR PROTECCION CIVIL</a>
    </div>
  </div>
  <div class="card text-dark bg-light">
    <img src="img/comunitario.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">COMUNITARIO</h5>
            <a href="sub_menu5" class="btn btn-primary">IR COMUNITARIO</a>
    </div>
  </div>
  <div class="card text-dark bg-light">
    <img src="img/sanitario.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">SOCIO-SANITARIO</h5>
            <a href="sub_menu6" class="btn btn-primary">IR SOCIO-SANITARIO</a>
    </div>
  </div>
</div>





@endsection