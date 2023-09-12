<?php

use App\Http\Controllers\CarritoController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DatosBancariosController;
use App\Http\Controllers\CompraController;
use App\Mail\PedidosMailable;
use Illuminate\Support\Facades\Mail;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/datosCompra', function () {
    return view('datosCompra');
})->name('datosCompra');

Route::get('/confirmacion_compra', function () {
    return view('confirmacion_compra');
})->name('confirmacion_compra');

Route::get('/informacion', function () {
    return view('informacion');
})->name('informacion');

Route::get('/datosBanco', function () {
    return view('datosBanco');
})->name('datosBanco');

Auth::routes();



Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    //validacion si el usuario exixte
    $userExists = User::where('external_id', $user->id)->where('external_auth', 'google')->first();

    if ($userExists) {
        Auth::login($userExists);
    } else {
        $userNew = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google',

        ]);
        Auth::login($userNew);
    }
    // $user->token

    return redirect('home');
});

Route::get('/admin', function () {
    return view('admin');
});



// rutas de productos
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::get('/productos/admin', [ProductoController::class, 'admin'])->name('productos.admin');
Route::get('/ver/{id}', [ProductoController::class, 'show'])->name('ver');
Route::get('/productos/carrito', [ProductoController::class, 'carrito'])->name('productos.carrito');
Route::get('/productos/{id}/edit', [ProductoController::class, 'update'])->name('productos.edit');
Route::resource('productos', ProductoController::class);

// rutas de compra
Route::post('/confirmacion_compra', [CompraController::class, 'confirmacionCompra'])->name('confirmacion_compra');
Route::get('/finalizar_compra', [CompraController::class, 'finalizarCompra'])->name('finalizar_compra');

// rutas de datos bancarios
Route::post('/datosCompra', [DatosBancariosController::class, 'generarOrden'])->name('datosCompra');
Route::post('/generar-orden', [DatosBancariosController::class, 'generarOrden'])->name('generar-orden');

// EMAIL
Route::get('/emails/pedidos', function () {
})->name('emails.pedidos');

// rutas de carrito
Route::get('Carrito/carrito', [CarritoController::class, 'mostrarCarrito'])->name('carrito.mostrar');
Route::post('/carrito/agregar', [CarritoController::class, 'agregarProducto'])->name('carrito.agregar');
Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'borrarProductoDelCarrito'])->name('carrito.eliminar');
Route::get('finalizar_compra', [CarritoController::class, 'finalizarCompra'])->name('finalizarCompra');


//finalizar compra

// web.php
