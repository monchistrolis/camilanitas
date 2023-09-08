@extends('layouts.footer')
@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center m-3">
        <h1 class="text-center">
            !Bienvenidos a Camilanitas!
        </h1>
    </div>
    <div class="container">
        <div class="row col-12">
            {{-- imagen --}}
            <div class="col-12 col-md-4 col-sm-12 mb-2 contentUni">
                <img class="imgUnicornio" src="{{ asset('images/unicornio.png') }}" alt="unicornio">
            </div>
            {{-- texto --}}
            <div class="col-12 col-md-8 col-sm-12 contentParrafo  ">
                <h2 class="pregunta mt-3">Que es Camilanitas?</h2>
                <p class="p-2">
                    En Camilanitas, somos mucho más que una tienda en línea; somos un emocionante viaje a un mundo lleno de
                    ternura y creatividad. Nuestra pasión radica en crear vínculos emocionales a través de adorables
                    peluches, alfombras y tapetes hechos de lana, conocidos como amigurumis.
                </p>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row col-12 mt-3 container">

            <div class="col-12 col-md-8 col-sm-12 contentParrafo">
                <p>
                    Nos enorgullece ser una prime en crecimiento en el universo de los amigurumis. Cada uno de nuestros
                    encantadores peluches, alfombras y tapetes los cuales son cuidadosamente tejido a mano con lana de la
                    más alta calidad, lo que les otorga un toque único y suavidad incomparable. Nuestro equipo de artesanos apasionados dedica tiempo y atención a cada detalle para asegurarse de que cada amigurumi sea una obra de arte en miniatura, lista para robar
                    corazones.
                </p>
            </div>
            <div class="col-12 col-md-4 col-sm-12 contentUni">
                <img class="imgUnicornio" src="{{ asset('images/carafeliz.png') }}" alt="unicornio">
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row col-12">
            <div class="col-12 col-md-4 col-sm-12 contentUni">
                <img class="imgUnicornio" src="{{ asset('images/fumar.png') }}" alt="unicornio">
            </div>
            <div class="col-12 col-md-8 col-sm-12 contentParrafo">
                <h2 class="pregunta mt-3">En que Creemos?</h2>
                <p class="p-2">
                    En Camilanitas, creemos en la magia de los pequeños detalles. Cada amigurumi cuenta su propia historia,
                    inspirada en la imaginación y el cariño que ponemos en cada creación. Ya sea un tierno animalito, un
                    personaje de cuento o una figura fantástica, nuestros peluches, alfombras y tapetes están diseñados para
                    traer sonrisas a personas de todas las edades.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row col-12 mt-3 mb-3 container">

            <div class="ccol-12 col-md-8 col-sm-12 contentParrafo">
                <h2 class="pregunta mt-3">Que Ofrecemos?</h2>
                <p>
                    En Camilanitas, no solo vendemos peluches , alfombras y tapetes; ofrecemos la oportunidad de abrazar la
                    calidez del tejido a mano y la dulzura de tener un amigo de lana. Únete a nosotros en este viaje tierno
                    y lleno de afecto mientras continuamos creciendo y expandiendo nuestra colección de amigurumis con amor
                    y dedicación. ¡Gracias por ser parte de la familia Camilanitas!
                </p>
            </div>
            <div class="col-12 col-md-4 col-sm-12 contentUni">
                <img class="imgUnicornio" src="{{ asset('images/oferta.png') }}" alt="unicornio">
            </div>
        </div>
    </div>
@endsection
