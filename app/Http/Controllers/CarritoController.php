<?php

// app/Http/Controllers/CarritoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;
use App\Mail\PedidosMailable;
use Illuminate\Support\Facades\Mail;


class CarritoController extends Controller
{
    public function agregarProducto(Request $request)
    {
        $productoId = $request->input('producto_id');
        $cantidad = $request->input('cantidad', 1);

        $opcion = $request->input('opcion', 0);
        $product = Producto::find($productoId);

        if (!$product) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        $cartItem = CartItem::where('product_id', $productoId)->first();

        if ($cartItem) {
            $cartItem->cantidad = $cantidad;

            $cartItem->opcion = $opcion + 1;
            $cartItem->save();
        } else {
            CartItem::create([
                'imagenes' => $product->imagenes,
                'product_id' => $productoId,
                'nombre' => $product->nombre,
                'cantidad' => $cantidad,
                'opcion' => $opcion + 1,
                'precio' => $product->precio,
            ]);
        }

        return redirect()->back()->with('success', 'Producto agregado al carrito correctamente.');
    }

    public function eliminarProducto(Request $request, $productoId)
    {
    }

    public function mostrarCarrito(Request $request)
    {
        $carrito = CartItem::with('product')->get();
        $total = 0;
        foreach ($carrito as $item) {
            $total += $item->precio * $item->cantidad;
        }

        // Almacenar el total del carrito en la sesión
        $request->session()->put('totalCarrito', $total);

        return view('Carrito.carrito', ['carrito' => $carrito, 'total' => $total]);
    }

    public function productoEmail(Request $request)
    {
       //mostar todo los datos de la base de datos 
        $producto = CartItem::with('product')->get();
        return view('emails.pedidos', ['carrito' => $producto]);

    }

    public function finalizarCompra(Request $request)
    {
        // Obtener el carrito actual de la sesión
        $carrito = $request->session()->get('carrito', []);

        // Eliminar los datos del carrito (tabla cartitem)
        CartItem::truncate();
        //correo de confirmacion
        $correo = new PedidosMailable;
        Mail::to('ramon.agui.san96@gmail.com')->send($correo);


        // Redirigir a una vista de "Compra finalizada" o a donde sea necesario
        return view('finalizar_compra' , ['carrito' => $carrito]);
    }


    public function borrarProductoDelCarrito($id)
    {
        $carritoItem = CartItem::find($id);
        if (!$carritoItem) {
            return redirect()->back()->with('error', 'Ítem del carrito no encontrado.');
        }
        $producto = Producto::find($carritoItem->product_id);
        if ($producto) {
            $producto->delete();
        }
        $carritoItem->delete();

        return redirect()->back()->with('success', 'Producto eliminado del carrito y de la base de datos correctamente.');
    }

}
