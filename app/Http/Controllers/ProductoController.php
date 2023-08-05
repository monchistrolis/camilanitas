<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['productos'] = Producto::all();
        return view('productos.index', $datos);
    }

    public function admin()
    {
        //
        $datos['productos'] = Producto::paginate(180);
        return view('productos.admin', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //devorve la vista de crear del formulario
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $datosProducto = $request->except('_token');

        if ($request->hasFile('imagenes')) {
            $imagenes = [];

            foreach ($request->file('imagenes') as $imagen) {
                $path = $imagen->store('uploads', 'public');
                $imagenes[] = $path;
            }

            $datosProducto['imagenes'] = json_encode($imagenes);
        }

        Producto::create($datosProducto);

        return redirect()->back()->with('success', 'Producto creado correctamente');
    }

    public function carrito(Request $request)
    {
        // Obtener el carrito actual de la sesión
        $carrito = $request->session()->get('carrito', []);

        // Lógica adicional para procesar el carrito si es necesario...

        return view('emails.pedidos', ['carrito' => $carrito]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $producto = Producto::find($id);
    $recomendacion = Producto::inRandomOrder()->limit(4)->get();
    $imagenes = [];

    if ($producto->imagenes) {
        $imagenes = json_decode($producto->imagenes);
    }

    return view('ver', compact('producto', 'recomendacion', 'imagenes'));
}




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //actualiza los datos de la BD
        $datosProducto = request()->except(['_token', '_method']);

        if ($request->hasFile('foto')) {
            $producto = Producto::findOrFail($id);
            Storage::delete('public/' . $producto->foto);
            $datosProducto['foto'] = $request->file('foto')->store('uploads', 'public');
        }


        Producto::where('id', '=', $id)->update($datosProducto);

        $producto = Producto::findOrFail($id);

        return redirect('productos/admin')->with('mensaje', 'Producto modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Producto::destroy($id);
        return redirect('productos/admin')->with('mensaje', 'Producto eliminado con exito');
    }
}
