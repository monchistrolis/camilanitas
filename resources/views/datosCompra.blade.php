@extends('layouts.app')

@section('content')
    <div class="container-fluid d-flex justify-content-center">
        <h1 class="mb-4">Datos de compra</h1>
        <hr>
        
    </div>
    <div class="container-fluid d-flex justify-content-center">
        @php
            $numeroOrden = rand(10000000, 99999999);            
        @endphp
        <h2>
            Número de orden: # {{ $numeroOrden }}
        </h2>
    </div>

    <div class="container d-flex justify-content-center">
        <!-- ... (resto del formulario y campos de entrada) ... -->

        <!-- Campo para mostrar el número de orden -->
        
        <div class="form-group col-8">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{ url('confirmacion_compra') }}" method="post">
                    @csrf
                    <!-- Resto del formulario y campos de entrada -->
                    <div class="form-group">
                        <label for="nombre">Nombre Completo:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="rut">Rut:</label>
                        <input type="text" class="form-control" id="rut" name="rut" required>
                    </div>
                    <div class="form-group">
                        <label for="region">Region:</label>
                        <input type="text" class="form-control" id="region" name="region" required>
                    </div>
                    <div class="form-group">
                        <label for="comuna">Comuna:</label>
                        <input type="text" class="form-control" id="comuna" name="comuna" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Celular:</label>
                        <input type="text" class="form-control" id="celular" name="celular" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Observacion:</label>
                        <input type="text" class="form-control" id="observacion" name="observacion">
                    </div>
                    
                    <div class="form-group">
                        <label for="numero_orden">Número de orden:</label>
                        <input type="text" class="form-control" id="numero_orden" name="numero_orden" value=" # {{ $numeroOrden }}"
                            readonly>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">confirmacion Compra</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Guardar el número de orden en una variable de sesión -->
    @php
        session(['numeroOrden' => $numeroOrden]);
        
    @endphp
@endsection


