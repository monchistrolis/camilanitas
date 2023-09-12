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

                        <label for="nombre"> <strong>Nombre:</strong></label>
                        <p> Camila Aguilera Sandoval</p>
                        <label for="rut"><strong>Rut:</strong></label>
                        <p>18.088.268-5</p>
                        <label for="banco"><strong>Banco:</strong></label>
                        <p>Banco de Chile</p>
                        <label for="tipo_cuenta"><strong>Tipo de Cuenta:</strong></label>
                        <p>Cuenta Vista</p>
                        <label for="numero_cuenta"><strong>Numero de Cuenta:</strong></label>
                        <p>00-010-49232-19</p>
                        <label for="Correo"><strong>Correo Electronico</strong></label>
                        <p>camilanitas@gmail.com</p>
                        <label for="monto"><strong>Monto a Transferir:</strong></label>
                        {{-- Mostrar el total --}}
                        <p>${{ session('totalCarrito') }}</p>

                        <label for="tranporte"><strong>Transporte:</strong></label>
                        <p>los cargo de transporte de debera acordar con el provedor.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    </div>

    <div class="contenedorBtn">
        
        <a href="{{ url('productos') }}" class="btnfinalizar mx-3">Volver a la tienda</a>
        {{-- finalizar la compra y enviar email al provedor --}}
        <a href="{{ url('finalizar_compra') }}" class="btnfinalizar ml-3">Finalizar compra</a>
    </div>
@endsection
