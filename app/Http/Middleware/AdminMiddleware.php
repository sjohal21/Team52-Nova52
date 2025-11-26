<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //checks if the user is authorised and if their role is admin
        if (!Auth::check() || Auth::user()->role !== 'admin') {
        return redirect('/')->withError('error','You are not authorised to access this page');
        }
        return $next($request);
    }
}
