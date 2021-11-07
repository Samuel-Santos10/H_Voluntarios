@extends('layout_post')

@section('public')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/post.css">
    <title>Publicaciones</title>
</head>
<body>
    <form action="publicar" enctype="multipart/form-data" id="new_post_container" class="new_post_container">
        <h1>Sin publicaciones</h1>
        <hr>
        <p>¡En estos momentos no se encuentran publicaciones disponibles!.</p>
    </form>
</body>
</html>

@endsection