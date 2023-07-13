<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProtegerRuta1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $contrasena = $request-> headers -> get('x_api_key.');

        if($contrasena != env('X_API_KEY')){
            return redirect('/pagina-error')->with('error', 'Contraseña incorrecta');
        }

        return $next($request);
    }
}
