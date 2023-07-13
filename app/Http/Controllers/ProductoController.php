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
        $datos['productos']=Producto::paginate(5);
        return view( 'productos.index',$datos);
    }
    public function admin()
    {
        //
        $datos['productos']=Producto::paginate(5);
        return view( 'productos.admin',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //devorve la vista de crear del formulario
        return view( 'productos.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosProducto = request()-> all();
        $datosProducto = request()-> except('_token');
        if($request->hasFile('foto')){
            $datosProducto['foto']=$request->file('foto')->store('uploads','public');
        }
        Producto::insert($datosProducto);

        //return a la view productos
        return redirect('productos')->with('mensaje','Producto agregado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $producto=Producto::findOrFail($id);
        return view ('productos.edit',compact('producto'));
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
        $datosProducto = request()-> except(['_token','_method']);

        if($request->hasFile('foto')){
            $producto=Producto::findOrFail($id);
            Storage::delete('public/'.$producto->foto);
            $datosProducto['foto']=$request->file('foto')->store('uploads','public');
        }


        Producto::where('id','=',$id)->update($datosProducto);

        $producto=Producto::findOrFail($id);
        
        return redirect('productos/admin')->with('mensaje','Producto modificado con exito');
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
        return redirect('productos/admin')->with('mensaje','Producto eliminado con exito');
    }
}
