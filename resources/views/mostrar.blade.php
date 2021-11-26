@extends('layout_post')

@section('public')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/post.css">
    <title>Publicaciones</title>
</head>
<body>
    <form enctype="multipart/form-data" id="new_post_container" class="new_post_container">
        <h1>Publicaciones</h1>
        <hr>
        <div class="container">
        <div class="row">
            <di class="col-xl-12">
                <form action="{{route('mostrar.index')}}" method="GET">
                    <div class="form-row">
                        <div class="col-sm-4 my-2">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}" placeholder="Ingresa el nombre publicacion">
                        </div>
                        <div class="col-auto my-2">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                            <button><a href="/index" class="btn-link btn">Nuevo</a></button>
                        </div>
                    </div>
                </form>
            </di>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Archivo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($publicaciones)<=0)
                                <tr>
                                    <td colspan="5">No hay resultados</td>
                                </tr>
                            @else
                            @foreach ($publicaciones as $publicacion)
                            <tr>
                                <th>{{$publicacion->id}}</th>
                                <th>{{$publicacion->titulo}}</th>
                                <th>{{$publicacion->descripcion}}</th>
                                <th>
                                     <img src="{{asset($publicacion->archivo)}}" alt="{{$publicacion->titulo}}" class="img-fluid img-thumbnail" width="100px">
                                </th>
                               <!-- <th>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$publicacion->id}}">
                                    Eliminar
                                </button>
                                <button><a href="/index" class="btn-link">Ver</a></button>
                                </th>> -->
                            </tr>
                            @include('delete')
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{$publicaciones->links()}}
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

@endsection