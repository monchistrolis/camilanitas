@extends('layouts.footer')
@extends('layouts.app')


@section('content')
    <div class="conainer tituloCarrito">
        <h1>
            Carrito
        </h1>

    </div>
    <div class="container">
        <div class="row col-12">
            <div class=" col-12 col-md-7 col-sm-12 mb-3">
                @if (count($carrito) > 0)
                    <table class="table contenerdorCarro">
                        <thead
                            <tr>

                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Opcion</th>
                                <th>Total</th>
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
                                            <button class="btnBorrar" value="Borrar"
                                                onclick="return confirm('¿Quiere Borrar Este Producto?')">Borrar del Carro</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="d-flex justify-content-center carrovacio">
                        <h2 >Parece que tu carro esta vacio.</h2>
                    </div>
                @endif
            </div>
            <div class="col-12 col-md-4 col-sm-12  contenedorResumen ">
                <div class="container">
                    <h2>Resumen</h2>
                </div>

                <h3>
                    @if (count($carrito) > 0)
                        Subtotal: $ {{ $total }} CL
                    @endif
                </h3>
                <blockquote class="cita">Los códigos de descuento y los costos de envío se agregarán durante el pago.</blockquote>
                @if (count($carrito) > 0)
                    <a class="btnFinalizar" href="/datosCompra">Finalizar Compra</a>
                @else
                    <!-- Deshabilitar el enlace si el carrito está vacío -->
                    <a class="btnFinalizar2 disabled" href="#">No se puede finalizar sin productos</a>
                @endif

            </div>
        </div>
    </div>

    <div class=" container d-flex justify-content-around mt-5 mb-2">
        <a class="btnProductos " href="/productos"> Seguir Comprando</a>
    </div>


@endsection
