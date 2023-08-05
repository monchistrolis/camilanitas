<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Session;

class DatosBancariosController extends Controller
{
    public function mostrarDatosBancarios()
    {
        return view('datos_bancarios');
    }

    public function generarOrden(Request $request)
    {
        // Generar un número de orden aleatorio de 8 dígitos
        $numeroOrden = rand(10000000, 99999999);

        // Guardar el número de orden en la sesión para usarlo más tarde
        Session::put('numero_orden', $numeroOrden);

        // Aquí puedes procesar los datos bancarios y enviarlos a la pasarela de pagos, etc.

        // Redireccionar al usuario a la vista de confirmación de compra
        return redirect()->route('confirmacion-compra');
    }
}

