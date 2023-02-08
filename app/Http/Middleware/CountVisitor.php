<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;

class CountVisitor
{
    

    /**
     * Summary of handle
     * @param Request $request
     * @param Closure $next
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next)
    {
        $ip = hash('sha512', $request->ip());
        if (Visitor::where('date', now())->where('ip', $ip)->count() < 1)
        {
            Visitor::create([
                'date' => now(),
                'ip' => $ip,
            ]);
        }
        return $next($request);
    }
}
