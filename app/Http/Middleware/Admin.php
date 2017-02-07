<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        // 0 = SUPER_ADMIN
        if ( Auth::check() && Auth::user()->type == 0 ) 
        {
            return $next($request);
        }

        return redirect()->to('home');
    }
}
