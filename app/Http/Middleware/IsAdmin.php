<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class IsAdmin
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
        if(auth()->user()->role=="admin") {
            return $next($request);
        }else {
            throw new AccessDeniedException("Only admin users are allowed access.");
        }
    }
}
