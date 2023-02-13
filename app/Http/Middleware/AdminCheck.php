<?php

namespace App\Http\Middleware;

use Closure;
use http\Env\Response;
use Illuminate\Http\Request;

class AdminCheck
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
        if(auth()->user()->is_admin){
            return $next($request);
        }else{
            abort(\Symfony\Component\HttpFoundation\Response::HTTP_FORBIDDEN);
        }
    }
}
