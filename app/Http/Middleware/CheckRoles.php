<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next ,$tipousuario)
    {
        // recibir todos los parametros
            // $tiposusuarios = func_get_args();
        //omitir elementos del array
        $tiposusuarios = array_slice(func_get_args(), 2);
        
            if (auth()->user()->hasRoles($tiposusuarios)) {
                return $next($request);
            }

        return redirect('/');
    }
}
