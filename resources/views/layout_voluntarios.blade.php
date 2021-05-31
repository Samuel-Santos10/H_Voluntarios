
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>VOLUNTARIOS</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link href="/css/estilos.css" rel="stylesheet">

</head>
<body>

<div id="app">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Voluntariados</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                        <li class="nav-item">
                                <a class="nav-link"  href="/">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"  href="/informate">Informate</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"  href="/deberes">Derechos/Deberes</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"  href="/historias_voluntarios">Historias de voluntarios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"  href="/beneficios_ayudas">Beneficios</a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link"  href="/tipos_voluntarios">Tipos de voluntarios</a>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <ul class="navbar-nav ml-auto">

            <li class="nav-item">
             <a class="nav-link"  href="/ayuda">Ayuda</a>
            </li>

            </ul>

        </nav>
   
        </div>

        <script src="https://unpkg.com/vue-resizable@1"></script>
         <script src="{{ asset('js/app.js') }}"></script>
        @yield('contenid')
</body>
</html>