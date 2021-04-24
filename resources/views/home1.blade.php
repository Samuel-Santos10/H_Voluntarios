@extends('layout')

@section('contenidos')


       <!-- contenido o codigo de home-->

<header class="container-fluid">
         <div class="row" style="height:680px; background-color:#A5FAE7">
             <div class="col-12 align-self-center text-center">
             <img src="{{asset('img/loogo.jpg')}}" class="img-fluid" width="200" alt="fgf">
             </div>

             <div class="col-12 align-self-center text-center">
            <h3>¿QUÉ HACEMOS?</h3>
            <p>La Fundación Internacional de Jóvenes Líderes es una entidad conformada por diversos referentes mundiales que <br> buscan brindar herramientas de desarrollo a las nuevas generaciones. Trabajamos en programas que estimulan el espíritu <br> emprendedor y de liderazgo. En ese camino ofrecemos becas de estudio, jornadas de networking y voluntariado <br> social. Asimismo, propiciamos la emisión de informes sobre problemáticas relacionadas con el sector. </p>
            </div>

         </div>
         </div>

       <!-- CAROUSEL-->
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item ">
            <img src="img/Pedir-ayuda.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item active">
            <img src="img/ambiental.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/fondo3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
    </div>
    <!-- CAROUSEL-->

   
    </div>
         </header>

@endsection
