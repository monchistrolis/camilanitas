@extends('layouts.app')

@section('content')
    <div class="recuadroregistro container">
        <div class="row justify-content-center">
            <div class="contenedorRegistro container col-md-6">
                <div class=" div2 card mt-3">
                    <div class="div1">
                        <div class="tituloregistro">
                            <h1 class="text-center ">Registro</h1>
                        </div>
                    </div>
                    <div class="  card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3 ">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                                <div class="col-md-6 ">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btnRegistro btn btn-primary">
                                        {{ __('Registrarse') }}
                                    </button>

                                </div>
                                <div class="col-md-6 offset-md-4 d-flex justify-content-center">
                                    <a class="btnGoogle btn mt-2 col-6"
                                        href="{{ url('/login-google') }}" class=" btn btn-danger">
                                        <img class="iconGoogle"src="{{ asset('images/google.png') }}" alt="">
                                        Google</a>
                                    <a class="btnFacebook btn mt-2 col-6"
                                        href="{{ url('/login-google') }}" class=" btn btn-danger">
                                        <img class="iconGoogle"src="{{ asset('images/facebook.png') }}" alt="">
                                        Facebook</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
