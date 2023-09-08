@extends('layouts.app')

@section('content')

{{-- esto es para acceder a la informacion de la session del formulario --}}
@php
    $datosConfirmacionCompra = session('confirmacion_compra');
@endphp

    <div class="container-fluid col-12 d-flex justify-content-center">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Datos de Envio</h2>
                        <h5 class="card-text"><strong>N° orden:</strong> {{ $datosConfirmacionCompra['numeroOrden'] }}</h5>
                        <p class="card-text"><strong>Nombre:</strong> {{ $datosConfirmacionCompra['nombre'] }}</p>
                        <p class="card-text"><strong>Rut:</strong> {{ $datosConfirmacionCompra['rut'] }}</p>
                        <p class="card-text"><strong>Región:</strong> {{ $datosConfirmacionCompra['region'] }}</p>
                        <p class="card-text"><strong>Comuna:</strong> {{ $datosConfirmacionCompra['comuna'] }}</p>
                        <p class="card-text"><strong>Dirección:</strong> {{ $datosConfirmacionCompra['direccion'] }}</p>
                        <p class="card-text"><strong>Celular:</strong> +56 {{ $datosConfirmacionCompra['celular'] }}</p>
                        {{-- si observacion esta vacia no mostrar campo --}}
                      
                            <p class="card-text"><strong>Observación:</strong> {{ $datosConfirmacionCompra['observacion'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Datos Bancarios</h2>

                        <label for="nombre">Nombre:</label>
                        <p>Ramon Aguilera</p>
                        <label for="rut">Rut:</label>
                        <p>12345678-9</p>
                        <label for="banco">Banco:</label>
                        <p>Banco de Chile</p>
                        <label for="tipo_cuenta">Tipo de cuenta:</label>
                        <p>Cuenta Corriente</p>
                        <label for="numero_cuenta">Número de cuenta:</label>
                        <p>123456789</p>
                        <label for="monto">Monto a Tranferir:</label>
                        {{-- Mostrar el total --}}
                        <p>${{ session('totalCarrito') }}</p>
                    </div>
                </div>
            </div>
        
        </div>
    </div>


    </div>

    <div class="contenedorBtn" >
        <a href="{{ url('productos') }}" class="btnfinalizar mx-3">Volver a la tienda</a>
        {{-- finalizar la compra y enviar email al provedor --}}
        <a href="{{ url('finalizar_compra') }}" class="btnfinalizar ml-3">Finalizar compra</a>
    </div>
@endsection
 