<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user() && Auth::user()->is_admin == 1){
            return $next($request);
        }

        return redirect('home')->with('ERROR', 'Você não tem permissão de administrador.');
    }
}
