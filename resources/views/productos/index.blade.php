@extends('layouts.footer')
@extends('layouts.app')
@section('content')
    <div class="col-12 d-flex justify-content-center">
        <div class="row">
            <h1>Productos</h1>
        </div>
    </div>

    <div class="container col-12 d-flex justify-content-center ">
        <div class="row">
            <div class="card-deck">
                <a id="estella" style="text-decoration: none">
                    @foreach ($productos as $producto)
                        <div class="tarjeta1 card m-3" style="width: 18rem;">
                            @if ($producto->imagenes)
                                @php
                                    $imagenes = json_decode($producto->imagenes);
                                @endphp
                                @if (!empty($imagenes[0]))
                                    <img class="img card-img-top" src="{{ asset('storage') . '/' . $imagenes[0] }}"
                                        alt="Card image cap">
                                @endif
                            @endif
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $producto->nombre }}</h5>
                                <h5 class="card-title text-center">$ {{ $producto->precio }}</h5>
                                <hr>
                                <p class="card-text text-center">
                                    {{ mb_substr($producto->descripcion, 0, 50) . (mb_strlen($producto->descripcion) > 50 ? '...' : '') }}
                                </p>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ url('ver', ['producto' => $producto->id]) }}" class="cardbtn btn mx-2"
                                        style="background-color:#e76e50">ver</a>
                                    <button class="cardbtn btn" style="background-color:#e8c468">Agregar</button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </a>
            </div>
        </div>
    </div>
@endsection
