<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Document</title>
</head>

<body>
    <h1>Hola Camila ,ha realizo un pediddo con el nº orden {{ session('numeroOrden') }}</h1>
    <h2>El pedido es el siguiente:</h2>
    
</body>

</html>
