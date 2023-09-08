@extends('layouts.footer')
@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner portada1">
                        <div class="carousel-item active ">

                            <img src="{{ asset('images/portada2.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block contenidocarrusel frase ">
                            <h5>Calimilanitas</h5>
                            <p>somos mucho más que una tienda en línea; somos un emocionante viaje a un mundo lleno de
                                ternura y
                                creatividad</p>
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('images/portada.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block contenidocarrusel frase ">
                            <h5>Calimilanitas</h5>
                            <p>somos mucho más que una tienda en línea; somos un emocionante viaje a un mundo lleno de
                                ternura y
                                creatividad</p>
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('images/portada.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block contenidocarrusel frase ">
                            <h5>Calimilanitas</h5>
                            <p>somos mucho más que una tienda en línea; somos un emocionante viaje a un mundo lleno de
                                ternura y
                                creatividad</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
