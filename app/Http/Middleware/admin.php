<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       if (Auth::check()){
         if ($guard == "admin" && Auth::guard($guard)->check()) {
           return $next($request);
         }
       }

        return redirect('/');
    }
}
