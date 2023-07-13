<div class="form-group">
    <label for="nombre">Nombre del producto:</label>
    <input type="text" class="form-control" id="nombre" value="{{$producto->nombre}}" name="nombre" required>
</div>
<div class="form-group">
    <label for="descripcion">Descripción:</label>
    <input class="form-control" id="descripcion" value="{{$producto->descripcion}}"name="descripcion" required>
</div>
<div class="form-group">
    <label for="precio">Precio:</label>
    <input type="number" class="form-control" id="precio" value="{{$producto->precio}}" name="precio" required>
</div>
<div class="custom-file">
    <label class="custom-file-label" for="foto">Foto:</label>
    <br>
    {{$producto->foto}}
    <input type="file" class="custom-file-input boton form-control-file mb-1 mt-2" id="foto" value=""name="foto" required>
  
  </div>
<div class="d-flex justify-content-center">
    <input type="submit" class="btn btn-primary mt-2" value="Guardar">
</div>