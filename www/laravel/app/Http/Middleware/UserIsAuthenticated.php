<?php

namespace App\Http\Middleware;

use Closure;

class UserIsAuthenticated
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
        if(!auth()->check(request(['email', 'password']))){
            return redirect()->home();
        }
        return $next($request);
    }
}
