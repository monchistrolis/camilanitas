@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="cardfin card" <div class="card-bodyfin card-body">
                    <h4 class="card-titlefin">Gracias por tu compra! </h4>
                    <p class="card-textfin">Hemos recibido tu compra y le enviaremos un correo con los detalles de tu compra
                        al proveedor, cuando se confirme el pago el proveedor se contactará con usted para coordinar la entrega.
                    </p>
                    <p class="card-textfin">El número de orden es: {{ session('numeroOrden') }}</p>
                    
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-center">
                <img src="{{ asset('images/fondo.png') }}" class="imgfin img-fluid" alt="Responsive image">

            </div>
        </div>
    </div>
    </div>
@endsection
