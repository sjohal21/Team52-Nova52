<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForcedPasswordChange
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //check the user is logged in
        $user = auth()->user();

        //check if its the users first time logging in or if they are alreadyu on the page, submitting their info or logging out
        if ($user && $user->must_change_password && !$request->routeIs('usermanagement')&& !$request->routeIs('usermanagement.changePassword') && !$request->routeIs('logout')) {
            return redirect()->route('usermanagement')->with(['message'=>"First login requires password change"]);
        }

        return $next($request);
    }
}
