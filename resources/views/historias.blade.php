@extends('layout_historias')

@section('publicas')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/post.css">
    <title>Historias</title>
</head>
<body>
    <form action="historias" enctype="multipart/form-data" id="new_post_container" class="new_post_container">
        <h1>Sin historias</h1>
        <hr>
        <p>Por el momento no disponemos de historias.</p>
        <br>
    </form>
</body>
</html>

@endsection