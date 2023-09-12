@extends('layouts.app')
@php
    if (request()->isMethod('post')) {
        $formularioData = [
            'nombre' => request('nombre'),
            'rut' => request('rut'),
            'region' => request('region'),
            'comuna' => request('comuna'),
            'direccion' => request('direccion'),
            'celular' => request('celular'),
            'observacion' => request('observacion'),
            'numeroOrden' => $numeroOrden,
        ];
        session(['formulario_data' => $formularioData]);
    }
@endphp

@section('content')
    <div class=" conttitulo container-fluid d-flex justify-content-center col-md-6">
        <h1 class="mb-4">Datos de compra</h1>
        <hr>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        @php
            $numeroOrden = rand(10000000, 99999999);
        @endphp
        @php
            $nombre = session('formulario_data.nombre');
        @endphp
        <div class="conttitulo">
            <h2 id="numeroOrden">
                Número de orden: # {{ $numeroOrden }}
            </h2>
        </div>

    </div>

    <div class="container d-flex justify-content-center">
        <!-- ... (resto del formulario y campos de entrada) ... -->

        <!-- Campo para mostrar el número de orden -->

        <div class="form-group formulario col-6">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{ url('confirmacion_compra') }}" method="post">
                    @csrf
                    <!-- Resto del formulario y campos de entrada -->
                    <div class="form-group">
                        <label for="nombre">Nombre Completo:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Tu nombre Aquí">
                    </div>
                    <div class="form-group">
                        <label for="rut">Rut:</label>
                        <input type="text" class="form-control" id="rut" name="rut" required placeholder=" Tu Rut">
                    </div>
                    <div class="form-group">
                        <label for="region">Region:</label>
                        <input type="text" class="form-control" id="region" name="region" required placeholder=" ej: Metropolitana">
                    </div>
                    <div class="form-group">
                        <label for="comuna">Comuna:</label>
                        <input type="text" class="form-control" id="comuna" name="comuna" required placeholder="ej: Puente Alto">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion:</label>
                        <p>calle ,pasaje o avenida, numeración y villa, población o condominio</p>
                        <input type="text" class="form-control" id="direccion" name="direccion" required placeholder="obispo espinosa *789, los miradores ">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Celular:</label>
                        <input type="text" class="form-control" id="celular" name="celular" required placeholder="+56985614793">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Observacion:</label>
                        <input type="text" class="form-control" id="observacion" name="observacion"placeholder="llamar al llegar , etc">
                    </div>

                    <div class="form-group">
                        <label for="numero_orden">Número de orden:</label>
                        <input type="text" class="form-control" id="numero_orden" name="numero_orden"
                            value=" # {{ $numeroOrden }}" readonly>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="bntconfirmacion  mt-3">Confirmacion Compra</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Guardar el número de orden en una variable de sesión -->
    @php
        session(['numeroOrden' => $numeroOrden]);
        
    @endphp

@php
// Guarda los datos en la sesión cuando se envía el formulario
if (request()->isMethod('post')) {
    session([
        'nombre' => request('nombre'),
        'rut' => request('rut'),
        'region' => request('region'),
        'comuna' => request('comuna'),
        'direccion' => request('direccion'),
        'celular' => request('celular'),
        'observacion' => request('observacion'),
        'numero_orden' => request('numero_orden'),
    ]);
}
@endphp
@endsection
