@extends('layouts.footer')
@extends('layouts.app')
@section('content')
    <div class="body-principal container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Ver Producto</h1>
            </div>
            <div class="row">
                {{-- caruucel --}}
                <div id="carouselExampleIndicators" class="carousel slide" style="max-width: 300px;">
                    <div class="carousel-inner">
                        @foreach ($imagenes as $index => $imagen)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img class="imgver img-fluid" src="{{ asset('storage') . '/' . $imagen }}"
                                    alt="Card image cap" style="max-height: 350px;">
                                <div class="carousel-caption">
                                    <h5 style="color: black">Opción {{ $index + 1 }}</h5>
                                    <p style="color: black">Descripción</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <br>
                    {{-- muniatura debajo el carrucel --}}
                    <div class="mt-4" id="fotosIDSeleccionado">
                        @foreach ($imagenes as $index => $imagen)
                            <img class=" imgminiatura img-thumbnail" src="{{ asset('storage') . '/' . $imagen }}" alt="Thumbnail Image"
                                style="max-height: 55px; margin: 3px; cursor: pointer; "
                                onclick="seleccionarOpcion({{ $index }})">
                        @endforeach
                    </div>
                </div>



                {{-- descripcion del producto --}}
                <div class="col">
                    <h1>{{ $producto->nombre }}</h1>
                    <hr class="linea">
                    <h2> $ {{ $producto->precio }}</h2>
                    <hr class="linea">
                    <p>{{ $producto->descripcion }}</p>
                    <hr class="linea">
                    @switch($producto->stock)
                        @case(0)
                            <p><img class="imgstock" src="{{ asset('images/caja.png') }}" alt=""> Sin Stock</p>
                            <p>
                                <img class="imgstock" src="{{ asset('images/correo.png') }}" alt=""> Consultar por
                                Stock
                            </p>
                            <p>
                                <img class="imgstock" src="{{ asset('images/whatsapp.png') }}" alt="">+569 7564 8236
                            </p>
                        @break

                        @case($producto->stock < 5)
                            <p><img class="imgstock" src="{{ asset('images/caja.png') }}" alt=""> {{ $producto->stock }}
                                Productos Limitados</p>
                        @break

                        @default
                            <p><img class="imgstock" src="{{ asset('images/caja.png') }}" alt=""> {{ $producto->stock }}
                                Unidades Disponibles</p>
                    @endswitch
                    <hr class="linea">
                    {{-- elecion de producto con menu desplegable  --}}
                    <div class="col">
                        <div class="form-group">
                            <label for="productos">Selecciona una imagen:</label>
                            <select class="selector form-control" id="productos" name="productos"
                                onchange="cambiarImagen()">
                                @foreach ($imagenes as $index => $imagen)
                                    <option class="opcion" value="{{ $index }}"
                                        data-img="{{ asset('storage') . '/' . $imagen }}">
                                        Opción {{ $index + 1 }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Fin del menú desplegable -->
                    </div>

                    {{-- selecion de cantidad --}}
                    <div class=" ">
                        <button class="btncantidadmenos" onclick="decrementarCantidad()">-</button>
                        <input class="input-redondeado text-center" type="number" id="cantidad" name="cantidad"
                            min="1" value="1" {{ $producto->stock === 0 ? 'disabled' : '' }}>
                        <button class="btncantidadmas" onclick="incrementarCantidad()"
                            {{ $producto->stock === 0 ? 'disabled' : '' }}>+</button>
                    </div>

                    <hr class="linea">

                    {{-- agregar boton de carrito --}}
                    <div class="d-flex justify-content-center">
                        <form action="" method="">
                            @csrf
                            <input type="hidden" name="producto_id" value="{{ $producto->id }}">

                            <button class="btn" style="width: 50%; background-color:#2a9d90;" type="submit"
                                {{ $producto->stock === 0 ? 'disabled' : '' }}> Agregar
                                <img class="imgcarrito" src="{{ asset('images/carrito-de-compras.png') }}" alt="">
                            </button>

                        </form>

                    </div>

                </div>
                {{-- mostar articulos recomendados en una card --}}
                <div class="col">
                    <div class="cardrecomendacion card">
                        <div class="card-header">
                            <h3>Articulos Recomendados</h3>
                            @foreach ($recomendacion as $producto)
                                <div class="col">
                                    <div class="row d-flex justify-content-center">
                                        @php
                                            $imagenes = json_decode($producto->imagenes);
                                            $imagen = isset($imagenes[0]) ? $imagenes[0] : null;
                                            $stockDisponible = $producto->stock > 0;
                                        @endphp
                                        @if ($imagen && $stockDisponible)
                                            <img class="imgrecomendacion img-fluid mb-1"
                                                href="{{ route('productos.show', $producto->id) }}"
                                                src="{{ asset('storage') . '/' . $imagen }}" alt="Card image cap">
                                        @else
                                            <img class="imgrecomendacion img-fluid mb-1"
                                                src="{{ asset('placeholder-image.jpg') }}" alt="Card image cap">
                                        @endif

                                        <div class="col">
                                            <p>{{ $producto->nombre }}</p>
                                            <a href="{{ route('productos.show', $producto->id) }}"
                                                class="cardbtn btn  mx-2" style="background-color:#e76e50 ">ver</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
