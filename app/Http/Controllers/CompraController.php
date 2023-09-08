<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\CartItem;
use App\Http\Controllers\CarritoController;

class CompraController extends Controller
{

    //funcion para mendar la info de un formulario a cualquier vista deseada
    public function confirmacionCompra(Request $request)
    {
        // Recibir los datos enviados desde el formulario
        $nombre = $request->input('nombre');
        $rut = $request->input('rut');
        $region = $request->input('region');
        $comuna = $request->input('comuna');
        $direccion = $request->input('direccion');
        $celular = $request->input('celular');
        $observacion = $request->input('observacion');
        $numeroOrden = $request->input('numero_orden');
        
        // Guardar los datos en la sesión
        $request->session()->put('confirmacion_compra', [
            'nombre' => $nombre,
            'rut' => $rut,
            'region' => $region,
            'comuna' => $comuna,
            'direccion' => $direccion,
            'celular' => $celular,
            'observacion' => $observacion,
            'numeroOrden' => $numeroOrden,
        ]);
       
        // Redirigir a la vista 'confirmacion_compra'
        return view('confirmacion_compra');
    }
    

    

}
