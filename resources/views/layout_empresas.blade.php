<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EMPRESAS</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="/css/estilos.css" rel="stylesheet">

    <link href="/css/informate.css" rel="stylesheet">


</head>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Empresas</a>

                <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                        <li class="nav-item">
                            <a class="nav-link" href="/">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"  href="/administracion_empresas">Administracion Empresa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" @click="abrirForm('empresa')" href="#">Registrar Empresas</a>
                        </li>

                      
                    

                    </ul>

                </div>
            </div>
        </nav>

       


        <empresas-component v-bind:form="forms" ref="empresa" v-show="forms['empresa'].mostrar"></empresas-component>
        

    </div>

    <div class="row py-5 animate__animated animate__fadeInLeft">
        <div class="col">
            <h5 class="text-center">EMPRESAS / ORGANIZACIONES</h5>
        </div>
    </div>

    <div class="row row-cols-2 row-cols-md-3 g-4">

    <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">ONG ayuda</h5>
                <p class="card-text">SOMOS LA MEJOR ONG</p>
                <a href="Empresa1" class="btn btn-primary">Ir empresa</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">ONG ambiental</h5>
                <p class="card-text">ser lo mejor.</p>
                <a href="Empresa2" class="btn btn-primary">Ir empresa</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">ONG firpo</h5>
                <p class="card-text">Ser excelente.</p>
                <a href="Empresa3" class="btn btn-primary">Ir empresa</a>
            </div>
        </div>

    </div>


    <!---->

    <div class="row py-5 row-cols-2 row-cols-md-3 g-20">

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Empresa ayudemos</h5>
                <p class="card-text">ayudar a los demas</p>
                <a href="Empresa4" class="btn btn-primary">Ir empresa</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Empresa salud</h5>
                <p class="card-text">brindar lo mejor de lo mejor</p>
                <a href="Empresa5" class="btn btn-primary">Ir empresa</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">ONG una mano</h5>
                <p class="card-text">brindar apoyo a los mas necesitados</p>
                <a href="Empresa6" class="btn btn-primary">Ir empresa</a>
            </div>
        </div>

    </div>
    </div>


    <script src="https://unpkg.com/vue-resizable@1"></script>
    <script src="https://cdn.socket.io/4.1.1/socket.io.min.js"
        integrity="sha384-cdrFIqe3RasCMNE0jeFG9xJHog/tgOVC1E9Lzve8LQN1g5WUHo0Kvk1mawWjxX7a" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('contenidos')
</body>

</html>