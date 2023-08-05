@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container d-flex justify-content-center ">
            @if (count($carrito) > 0)
                <table class="table">
                    <thead>
                        <tr>

                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Opcion</th>
                            <th>Precio</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carrito as $producto)
                            <tr>
                                <td>{{ $producto['nombre'] }}</td>
                                <td>{{ $producto['cantidad'] }}</td>
                                <td>{{ $producto['opcion'] }}</td>
                                <td>{{ $producto['precio'] }}</td>
                                <td>
                                    <form action="{{ route('carrito.eliminar', $producto->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" value="Borrar"
                                            onclick="return confirm('¿Quiere Borrar Este Producto?')">borrar</button>
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            @else
            <div class="d-flex justify-content-center">
                <h1 class="carrovacio ">El carrito está vacío.</h1>
            </div>
                
            @endif
        </div>
    </div>
    <div class=" d-flex justify-content-center">
        <h1>
            @if (count($carrito) > 0)
                Total: $ {{ $total }} CL
            @endif
            
        </h1>

    </div>
    <div class=" container d-flex justify-content-around mt-5">
        <a class="btnProductos " href="/productos"> Seguir Comprando</a>
        @if (count($carrito) > 0)
            <a class="btnFinalizar" href="/datosCompra">Finalizar Compra</a>
        @else
            <!-- Deshabilitar el enlace si el carrito está vacío -->
            <a class="btnFinalizar2 disabled" href="#" >No se puede finalizar sin productos</a>
        @endif

    </div>
   

@endsection
