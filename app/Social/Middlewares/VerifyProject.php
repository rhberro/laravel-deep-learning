<?php

namespace App\Social\Middlewares;

use Illuminate\Support\Facades\Auth;

use Closure;

class VerifyProject
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($request->session()->has('project')) {
            return $next($request);
        }

        return redirect()->route('projects');
    }
}
