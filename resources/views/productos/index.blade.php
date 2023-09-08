@extends('layouts.footer')
@extends('layouts.app')
@section('content')
    <div class="col-12 d-flex justify-content-center">
        <div class="row">
            <h1>Productos</h1>
        </div>
    </div>
    @if ($productos->isEmpty())
        <div class="d-flex justify-content-center mt-3">
            <h3>No hay productos disponibles en este momento comunicate con la administracion
            </h3>
        </div>
    @else
        <div class="container col-12 ">
            <div class="row">
                <div class="card-deck col-12 col-md-12 col-sm-4 ">
                    <a id="estella" style="text-decoration: none">
                        @foreach ($productos as $producto)
                            <div class="tarjeta2 card m-3 " style="width: 18rem;">
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
                                    <div class="descripcion mb-2">
                                        <p class="card-text text-center ">
                                            {{ mb_substr($producto->descripcion, 0, 50) . (mb_strlen($producto->descripcion) > 50 ? '...' : '') }}
                                        </p>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <a href="{{ url('ver', ['producto' => $producto->id]) }}" class="cardbtn btn mx-2"
                                            style="background-color:#e76e50">ver</a>

                                        <form action="{{ route('carrito.agregar') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="producto_id" value="{{ $producto->id }}">

                                            <!-- Campo oculto para almacenar la opción (imagen) seleccionada -->
                                            <input type="hidden" name="opcion" id="opcion" value="0">
                                            <input type="hidden" name="cantidad" id="cantidad-hidden" value="1">
                                            <!-- Campo oculto para enviar la cantidad al controlador -->
                                            <button class="btn" style="background-color:#e8c468" type="submit"
                                                {{ $producto->stock === 0 ? 'disabled' : '' }}> Agregar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </a>
                </div>
            </div>
        </div>
    @endif
@endsection
