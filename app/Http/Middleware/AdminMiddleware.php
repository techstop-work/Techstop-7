<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $guard = config('auth.defaults.admin_guard', 'admin');
        if (!Auth::guard($guard)->check()) {
            return redirect('/');
        }
        return $next($request);
    }
}
