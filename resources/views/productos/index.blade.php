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
                        <div class=" tarjeta1 card m-3" style="width: 18rem;">
                            <img class="img card-img-top" src="{{ asset('storage') . '/' . $producto->foto }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $producto->nombre }}</h5>
                                <h5 class="card-title text-center"> $ {{ $producto->precio }}</h5>
                                <hr>
                                <p class="card-text text-center">"{{ $producto->descripcion }}"</p>
                                <div class="d-flex justify-content-center">
                                    <button class="cardbtn btn  mx-2" style="background-color:#e76e50 ">ver</button>
                                    <button class="cardbtn btn "style="background-color:#e8c468">Agregar</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </a>
            </div>
        </div>
    </div>
@endsection
