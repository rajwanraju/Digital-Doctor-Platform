<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
      if (!empty(Auth::user()->user_Type)) {
        if (Auth::user()->user_Type === 'admin') {
            return $next($request);
        } else {

            return redirect()->intended('pagenotfound');
        }
    } else {
      
        return redirect()->intended('pagenotfound');
    }
    }
}
