@extends('layout')

@section('contenidos')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header bg-primary">{{ __('Bienvenido') }}</div>

                <div class="card text-center bg-primary">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a>Terminos y condiciones</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body bg-danger">
                        <p class="card-text">Al aceptar los terminos y conciones de uso, estaras aceptando <br>
                                             el uso de cookies, asi como brindado tus datos personales, asi como <br>
                                             aceptando los terminos legales de las diferentes funciones que en <br>
                                             este sitio web se realizan.</p>
                        <a href="register" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection