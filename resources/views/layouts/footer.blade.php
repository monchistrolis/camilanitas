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

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <?php echo date('Y'); ?> Tu Sitio</p>
            </div>
            <div class="col-md-6">
                <ul class=" colortext footer-links">
                    <li><a style="text-decoration: none; color:white" href="{{ url('/') }}">Inicio</a></li>
                    <li><a style="text-decoration: none; color:white" href="{{ route('productos') }}">Sobre nosotros</a></li>
                    <li><a style="text-decoration: none; color:white" href="{{ route('productos') }}">Contacto</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
