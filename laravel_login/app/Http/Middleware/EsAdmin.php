<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // handle funciona como antes 
    public function handle(Request $request, Closure $next)
    {
        $user=Auth::user();
        // Si el usuario no es administrador debe ir a la raiz (!$user es una negacion)
        if(!$user->EsAdmin()){
            return redirect('/');
        }
        return $next($request);
    }
}
