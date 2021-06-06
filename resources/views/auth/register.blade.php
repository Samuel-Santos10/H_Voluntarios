@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">{{ __('Registrarse') }}</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            
                            <div class="col-md-6"> 
                            <p>Carácteres min: 5 max:30 (Solo letras)</p>
                                <input id="name" type="text" placeholder="Escribe tu nombre" required pattern="[A-ZÑña-z, ]{5,30}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"  placeholder="correo@example.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Tu contraseña debe ser de 8 caracteres minimo" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Vuelve a escribir tu contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                      <div class="form-group row ">
                            <div class="col-md-8 offset-md-4">
                                <label class="text-dark btn-block">
                                       <input type="checkbox" name="terminos" tabindex="7" value="1" required> 
                                       Acepto los <a style="color:blue;" href="terminos">terminos y condiciones</a>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button sendbtn.disabled = this.checked ? true : false; type="submit" class="btn btn-primary text-dark">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div> 
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
