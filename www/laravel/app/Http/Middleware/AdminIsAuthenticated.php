<?php

namespace App\Http\Middleware;

use Closure;

class AdminIsAuthenticated
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
        if(! auth()->guard('web_admin')->check(request(['email', 'password']))){
            return redirect('/adminlogin');
        }
        return $next($request);
    }
}
