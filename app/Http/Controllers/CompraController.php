<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\CartItem;
use App\Http\Controllers\CarritoController;

class CompraController extends Controller
{
    public function confirmacionCompra(Request $request)
    {
        // Recibir los datos enviados desde el formulario
        $nombreP = $request->input('nombre');
        $rut = $request->input('rut');
        $region = $request->input('region');
        $comuna = $request->input('comuna');
        $direccion = $request->input('direccion');
        $celular = $request->input('celular');
        $observacion = $request->input('observacion');
        $numeroOrden = $request->input('numero_orden');
        
        // Pasar los datos a la vista 'confirmacion_compra'
        return view('/confirmacion_compra', compact('nombre', 'rut', 'region', 'comuna', 'direccion', 'celular' , 'observacion','numeroOrden'));

    }
    public function finalizarCompra(Request $request)
    {
        // Recibir los datos enviados desde el formulario
        
        $nombre = $request->input('nombre');
        
        return view('finalizar_compra', compact('nombre'));
    
    }

}
