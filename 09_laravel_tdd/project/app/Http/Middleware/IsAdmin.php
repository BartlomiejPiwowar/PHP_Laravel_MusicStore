<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user() && auth()->user()->is_admin) {
            return $next($request);
        }

        // Jeśli użytkownik nie jest administratorem, przekieruj go do strony głównej lub innej strony
        return redirect('/');
    }
}
