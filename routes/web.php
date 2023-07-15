<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ProductoController;
use App\Http\Middleware\ProtegerRuta1;



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
});



Route::get('/informacion', function () {
    return view('informacion');
})->name('informacion');

Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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

Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::get('/productos/admin', [ProductoController::class, 'admin'])->name('productos.admin');
Route::get('/ver/{id}', [ProductoController::class, 'show'])->name('ver');





Route::resource('productos', ProductoController::class);




