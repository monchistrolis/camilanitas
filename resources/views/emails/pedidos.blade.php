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
    <!-- icono -->
    <link rel="icon" href="{{ asset('images/fondo.png') }}">
    <!-- js -->
    <script src="{{ asset('build/assets/app.js') }}"></script>

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        img {
            max-width: 100px;
            margin: 20px;
        }

        h1 {
            font-size: 24px;
            margin: 10px 0;
        }

        h2 {
            font-size: 18px;
            margin: 20px 0;
        }

        h3 {
            font-size: 16px;
            margin: 10px 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

    </style>
</head>

<body>
    <h1>Hola Camila, ha realizado un pedido con el número de orden {{ session('numeroOrden') }}</h1>
    <h2>El pedido es el siguiente:</h2>

    @php
        $datosConfirmacionCompra = session('confirmacion_compra');
    @endphp

    <div class="pedido">
        @foreach ($carrito as $item)
            <div class="producto">
                <h3>Nombre del Producto: {{ $item->nombre }}</h3>
                <p>Cantidad de Producto: {{ $item->cantidad }}</p>
                <p>Opción de elección: {{ $item->opcion }}</p>
                <p>Total del pedido: {{ $item->precio }}</p>
            </div>
        @endforeach
    </div>

    <h2>Datos del cliente:</h2>
    <h3>Nombre: {{ $datosConfirmacionCompra['nombre'] }}</h3>
    <h3>Celular: {{ $datosConfirmacionCompra['celular'] }}</h3>
    <h3>Comuna: {{ $datosConfirmacionCompra['comuna'] }}</h3>
    <h3>Dirección: {{ $datosConfirmacionCompra['direccion'] }}</h3>
    <h3>Observación: {{ $datosConfirmacionCompra['observacion'] }}</h3>
</body>

</html>
