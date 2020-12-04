<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class IsMedTech
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
        if(auth()->user()->role=="medtech" || auth()->user()->role=="admin") {
            return $next($request);
        }else {
            return redirect()->back()->with('Error','Access denied for non MedTech users.');
        }
    }
}
