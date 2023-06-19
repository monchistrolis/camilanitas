<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Camilanitas') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="body">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="MiLogo" src="{{ asset('images/lana.png') }}" alt="">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div class="itemnavbar container-fluid">
                   
                    <ul class="navbar-nav me-auto d-flex justify-content-center">
                        <li class="nav-item dropdown">
                            {{-- <a class="nav-link" href="{{ route('productos') }}">{{ __('Productos') }}</a> --}}
                            <a class="nav-link dropdown-toggle" href="{{ route('productos') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ __('Productos') }}
                              </a>
                              <ul class="menudesplegable dropdown-menu">
                                <li><a class="dropdown-item" href="#">Amigurumi</a></li>
                                <li><a class="dropdown-item" href="#">Patrones</a></li>
                                
                                <li><a class="dropdown-item" href="#">Libros Sensoriales</a></li>
                              </ul>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('productos') }}">{{ __('Informacion') }}</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('productos') }}">{{ __('Contactos') }}</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('productos') }}">{{ __('Carrito') }}</a>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse me-4" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
