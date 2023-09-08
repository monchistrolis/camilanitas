@extends('layouts.app')

@section('content')
@php
    $datosConfirmacionCompra = session('confirmacion_compra');
@endphp

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="cardfin card">
                    <div class="card-bodyfin card-body">
                        <h4 class="card-titlefin">{{ $datosConfirmacionCompra['nombre'] }} Gracias por tu compra! </h4>
                        <p class="card-textfin">Hemos recibido tu pedido y le enviaremos un correo con los detalles de tu
                            compra
                            al proveedor, cuando se confirme el pago al proveedor, reenvia tu comprovante al correo o
                            whatsApp
                            indicado mas abajo y nos contactará con usted para completar el proceso de compra y envio.
                        </p>
                        <hr>
                        <div class="container-fluid d-flex justify-content-center">
                            <div class="row col-12 ">
                                <div class="col">
                                    <h3>correo: camilanitas@gmail.com, </h3>
                                    <h3>n° +56945088503</h3>
                                </div>
                                <div class="col">
                                    <h2 class="">El número de orden es: <h2>{{ session('numeroOrden') }}</h2>
                                    </h2>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
               
            </div>
        </div>
    </div>
@endsection
