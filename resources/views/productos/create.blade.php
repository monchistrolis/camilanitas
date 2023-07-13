@extends('layouts.app')

@section('content')
    <div class="container col-6">
        <h1 class="d-flex justify-content-center">Agregar Producto</h1>
        <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="nombre">Nombre del producto:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input class="form-control" id="descripcion" name="descripcion" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="custom-file">
                <label class="custom-file-label" for="foto">Foto:</label>
                <br>
                <input type="file" class="custom-file-input boton form-control-file mb-1 mt-2" id="foto" name="foto" required>
              
              </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-2" value="enviar">Agregar</button>
            </div>
           
        </form>
    </div>
@endsection
