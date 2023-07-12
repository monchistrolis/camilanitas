@extends('layouts.app')
@section('content')
@vite('resources/sass/app.scss')

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="row">
                <h1>Informacion</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="row d-flex justify-content-center">
                <h2 class="text-center">¿Quienes somos?</h2>
                <img class="logoInfo" src="{{ asset('images/lana.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="row">
                <p>Somos una empresa dedicada a la venta de amigurumis, hechos a mano con mucho amor y dedicacion, para
                    que nuestros clientes puedan disfrutar de un producto de calidad y duradero.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="row">
                <h2>¿Que es un amigurumi?</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="row">
                <p>Un amigurumi es un muñeco de peluche hecho a mano, con la tecnica japonesa del tejido a crochet o
                    ganchillo. El termino amigurumi proviene de la union de dos palabras japonesas: ami, que significa
                    tejer, y nuigurumi, que significa peluche.</p>
            </div>
        </div>
    </div>
</div>
@endsection