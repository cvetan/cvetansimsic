<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return RedirectResponse|mixed
     */
    public function handle($request, Closure $next): RedirectResponse
    {
        if (auth()->user()->is_admin) {
            return $next($request);
        }

        return redirect()->route('login');
    }
}
