<?php

namespace App\Http\Middleware;

use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Support\Facades\Auth;
use Closure;

class OperativosMiddleware
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
        if (app('auth')->user()->can('operativos')) {
            return redirect('/operativos/agregar');
        }

        return $next($request);
    }
}
