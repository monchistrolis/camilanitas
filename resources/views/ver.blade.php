@extends('layouts.footer')
@extends('layouts.app')
@section('content')
    <img class="img card-img-top" src="{{ asset('storage') . '/' . $producto->foto }}"
                                alt="Card image cap">
    <h1>{{$producto->nombre}}</h1>
    <h1>{{$producto->descripcion}}</h1>
    <h1>{{$producto->precio}}</h1>
    
@endsection