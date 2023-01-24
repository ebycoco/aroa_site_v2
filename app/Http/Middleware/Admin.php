<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Admin
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
        if (!Auth::guard('admin')->check()) {
            // return view('admin.auth.login')->with('error', "Veuillez vous connecter s'il vous plait !");
            return Redirect::to('admin/')->with('error', "Veuillez vous connecter s'il vous plait !");
            // return response()->view('admin.auth.login', [], 200);
            // return Response::view('admin.auth.login', []);
        }
        return $next($request);
    }
}
