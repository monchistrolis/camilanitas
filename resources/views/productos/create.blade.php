@extends('layouts.app')

@section('content')
    <div>
        <h1 class="text-center mt-1 mb-5">Agregar Producto</h1>
    </div>
    <div class="container col-8 d-flex justify-content-center">
        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
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
            <div class="form-group">
                <label for="stock">Cantidad de Stock:</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>

            <div class="custom-file">
                <label class="custom-file-label" for="fotos">Fotos:</label>
                <br>
                <input type="file" class="custom-file-input boton form-control-file mb-1 mt-2" id="fotos"
                    name="imagenes[]" multiple required>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-2" value="enviar">Agregar</button>
            </div>
        </form>
    </div>
@endsection
