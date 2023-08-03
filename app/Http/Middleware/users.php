<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

use Illuminate\Http\Request;

class users
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $rowValue = Auth::user()->row;
    
            // Allow users with rowValue of 0, 1, or 2 to access the route
            if ($rowValue == 'admin' ) {
                return $next($request);
            }
        }
    
        return redirect('/page3');
    }
}
