<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class ISAmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()){
            if (Auth::user()->is_admin){
                return $next($request);
            }
            return redirect()->route('home');
        }
        return redirect()->route('home');
    }
}
