@extends('layouts.app')

@section('content')
    <div class="recuadrologin container">
        <div class=" row justify-content-center">
            <div class=" contenedorRegistro col-md-8">
                <div class=" div2 card mt-3">
                    <div class="div1">
                        <div class="tituloregistro">
                            <h1 class="tituloLogin text-center ">Login</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Ingresa tu Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Recordar') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Entrar') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Olvidate tu Contraseña?') }}
                                        </a>
                                    @endif

                                </div>
                                <div class="btnLogin col-md-6 offset-md-4 d-flex justify-content-center">
                                    <a class="btnGoogle btn mt-2 col-6" href="{{ url('/login-google') }}"
                                        class=" btn btn-danger">
                                        <img class="iconGoogle"src="{{ asset('images/google.png') }}" alt="">
                                        Google</a>
                                    <a class="btnFacebook btn mt-2 col-6" href="{{ url('/login-google') }}"
                                        class=" btn btn-danger">
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
