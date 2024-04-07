<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckParentRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and has the parent role
    if (Auth::check() && Auth::user()->role == 'parent') {
        // Allow the request to proceed
        return $next($request);
    }

    // Otherwise, redirect the user to the home page or show an error message
    return redirect()->route('home')->with('error', 'You are not authorized to register users.');
    }


}
