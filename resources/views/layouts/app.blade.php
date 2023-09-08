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
    {{-- icono --}}
    <link rel="icon" href="{{ asset('images/fondo.png') }}">
    {{-- js --}}
    <script src="{{ asset('build/assets/app.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="body">
    <div class="app" id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="MiLogo" src="{{ asset('images/fondo.png') }}" alt="">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="itemnavbar container collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav  d-flex justify-content-center">
                        <li>
                            <a class="nav-link" href="/productos">{{ __('Producto') }}</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('informacion') }}">{{ __('Nosotros') }}</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('carrito.mostrar') }}">{{ __('Carrito') }}
                                <span class="badge badge-primary cart-count ">{{ session('cart_count',0) }}</span>
                            </a>
                        </li>
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
