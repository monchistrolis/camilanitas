@extends('layouts.appAdmin')

@section('content')
{{-- fromulario para los pruductos --}}
<form action="" method="pots" enctype="multipart/form-data">
    <input type="text" name="Nombre">
    <input type="text" name="Descripcion">
    <input type="text" name="Precio">
    <input type="text" name="Cantidad">
    <input type="file" name="Imagen">  
    <input type="submit" value="Enviar">

</form>
@endsection