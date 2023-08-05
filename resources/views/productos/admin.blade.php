@extends('layouts.footer')
@extends('layouts.app')
@section('content')
    <div class="col-12 d-flex justify-content-center">
        <div class="row">
            <h1>Panel De Administrador</h1>
        </div>
    </div>
   
        <div class="container d-flex justify-content-center ">
            <div class="row">

                <div class="card-deck">
                    <a id="estella" style="text-decoration: none">
                        @foreach ($productos as $producto)
                        <div class=" tarjeta1 card m-3" style="width: 18rem;">
            
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
                                <h5 class="card-title text-center">{{ $producto->precio }}</h5>
                                <hr>
                                <p class="card-text text-center">"{{ $producto->descripcion }}"</p>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ url('/productos/' . $producto->id . '/edit') }}"
                                        class="editarbtn btn" style="background-color:#2a9d90">Editar</a>
                                    <form action="{{ url('/productos/' . $producto->id) }}" method="POST">
                                        @csrf
                                        {{@method_field('DELETE')}}
                                        <button class="cardbtn btn"style="background-color:#e8c468" value="Borrar"
                                            onclick="return confirm('Quiere Borrar Este Producto?')">borrar</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </a>
                </div>
            </div>
        </div>
        
   
@endsection
