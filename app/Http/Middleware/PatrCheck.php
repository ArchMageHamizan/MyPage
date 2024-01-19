<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PatrCheck
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
        if($request->pat && $request->pat=='false'){
            return redirect('noaccess_2');
        }
        return $next($request);
    }
}
