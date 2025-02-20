<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and is an admin
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'You do not have admin access.');
    }
}
