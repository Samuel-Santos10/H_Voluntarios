@extends('administracion_empresas')

@section('contenidos')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Publicaciones</title>
</head>

<script type="text/javascript">
    function Cancelar() {
    var respuesta = alert("Seguro que deseas cancelar la publicacion");

    if (respuesta == true) {
        return true;
    } else {
        return false;
    }
}
</script>


<body>

<form action="{{route('mostrar.store')}}" enctype="multipart/form-data" id="new_post_container"
        class="new_post_container was-validated" method="POST">
        @csrf
        <h1>Nueva publicación</h1>
        <hr>
        <br>
        <div class="mb-3 row form-box">
            <label class="col-sm-1 col-form-label" for="validationServer01">Titulo: </label>
            <div class="col-sm-10">
                <input type="text" id="validationServer01" class="form-control is-valid" required
                    pattern="[A-ZÑña-z]{1,30}" placeholder="Escribe aqui el titulo de tu publicación" name="titulo">
                <small class="error-text">(Max. 30 caracteres. Solo letras) </small>
            </div>
        </div>

        <div class="mb-3 row form-box">
            <label class="col-sm-1 col-form-label" for="nombre">Descripcion: </label>
            <div class="col-sm-10">
                <input class="form-control" name="descripcion" class="TxtTarea" type="text" id="exampleFormControlTextarea1"
                    required placeholder="¿Que estas pensando?" rows="3"></input>
            </div>
        </div>

        <div class="ui-input">
            <label class="col-sm-2 col-form-label" for="archivo">Añadir archivo adjunto: </label>
            <input type="file" name="archivo" id="miInput">
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
             <button class="btn btn-primary me-md-2 btnSavePost" id="submit" type="submit" value="Guardar">Publicar</button> 
            <a class="btn btn-danger" href="/administracion_empresas" role="button" onclick="Cancelar()">Cancelar</a>
            <p class="clearfix"></p>
        </div>
    </form>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
@endsection
