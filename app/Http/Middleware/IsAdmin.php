<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return Response|RedirectResponse
     */
    public function handle($request, Closure $next): Response
    {
        if (auth()->user()->is_admin) {
            return $next($request);
        }

        return redirect()->route('login');
    }
}
