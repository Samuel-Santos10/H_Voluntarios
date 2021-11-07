
@extends('layout_foros')

@section('publica')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/post.css">
    <title>Foros</title>
</head>
<body>
<form action="publicar" enctype="multipart/form-data" id="new_post_container"
        class="new_post_container was-validated">
        <h1>Sin foros creados</h1>
        <hr>
        <p>¡Lo sentimos! Por el momento no hay foros disponibles.</p>
    </form>
</body>
</html>

@endsection