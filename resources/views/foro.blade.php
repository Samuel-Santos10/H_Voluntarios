@extends('administracion_empresas')

@section('contenidos')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/foro.css">
    <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>

    <title>Foro</title>
</head>

<script type="text/javascript">
function Cancelar() {
    var respuesta = alert("Seguro que deseas cancelar el foro");

    if (respuesta == true) {
        return true;
    } else {
        return false;
    }
}
</script>

<body>

    <body>
        <form enctype="multipart/form-data" id="formulario" class="formulario was-validated">
            <div id="editor"></div>

            <h1>Nuevo foro</h1>
            <hr>
            <br>
            <div class="mb-3 row form-box">
                <label class="col-sm-1 col-form-label" for="nombre">Titulo: </label>
                <div class="col-sm-10">
                    <input class="form-control" name="paso" id="exampleFormControlTextarea1" required
                        pattern="[A-ZÑña-z]{1,30}" placeholder="Escribe aqui el titulo de tu foro" rows="3"></input>
                    <small class="error-text">(Max. 30 caracteres. Solo letras) </small>
                </div>
            </div>

            <div class="mb-3 form-box">
                <label for="select" id="orden" class="col-sm-1 col-form-label">Tipo de foro</label>
                <select class="form-select" required aria-label="select example">
                    <option value="">Seleccionar una categoria</option>
                    <option value="1">Comunitario</option>
                    <option value="2">Educativo</option>
                    <option value="3">Social</option>
                    <option value="3">Socio-Sanitario</option>
                    <option value="3">Ambiental</option>
                    <option value="3">Proteccion civil</option>
                </select>
            </div>

            <div class="mb-3 row form-box">
                <label class="col-sm-1 col-form-label" for="nombre">Descripcion: </label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="paso" id="exampleFormControlTextarea2" required
                        placeholder="¿Que estas pensando?" rows="3"></textarea>
                    <script>
                    CKEDITOR.replace('exampleFormControlTextarea2', {
                        extraPlugins: 'editorplaceholder',
                        editorplaceholder: '¿Que estas pensando...?',
                        removeButtons: 'PasteFromWord'
                    });
                    </script>
                </div>
            </div>

            <div class="ui-input">
                <label class="col-sm-2 col-form-label" for="nombre">Añadir archivo adjunto: </label>
                <input type="file" id="miInput">
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <!-- <button class="btn btn-primary me-md-2" id="submit" type="submit">Crear foro</button> -->
                <a class="btn btn-danger" href="/administracion_empresas" role="button"
                    onclick="Cancelar()">Cancelar</a>
                <p class="clearfix"></p>
            </div>

        </form>
        <script src="{{ asset('js/script.js') }}"></script>

    </body>

    @endsection