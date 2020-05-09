<?php

namespace App\Http\Middleware;

use Closure;

class CheckOwner
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
        if ($request->is_owner = 1) {
            return route('shops.index');
        }

        if ($request->is_owner = 0) {
            return route('shopsforuser.index');
        }

        return $next($request);
    }
}
