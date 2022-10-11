<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::user()->role_id == 1) {
            return $next($request);
        }
        elseif (Auth::user()->role_id == 2) {
            abort(403);
        }
        elseif (Auth::user()->role_id == 3) {
            abort(403);
        }
        elseif (Auth::user()->role_id == 4) {
            abort(403);
        }
        else {
            return $next($request);
        }

    }
}
