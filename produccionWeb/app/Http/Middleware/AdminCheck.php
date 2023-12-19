<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class AdminCheck
{
public function handle(Request $request, Closure $next)
{
    if (!auth()->check() || !auth()->user()->isAdmin()) {
        return redirect()->route('login');
    }

    return $next($request);
}
}
