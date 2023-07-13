@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center">
           
        <div class="col-6 ">
             <h1 class="d-flex justify-content-center">Editar Producto</h1>
             <form action="{{url ('/productos/'.$producto->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{@method_field('PATCH')}}
                    @include('form')
             </form>
            
        </div>
    </div>
@endsection
