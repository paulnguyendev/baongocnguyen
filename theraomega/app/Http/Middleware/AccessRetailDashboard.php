<?php

namespace App\Http\Middleware;

use Closure;

class AccessRetailDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if ($request->session()->has('retailInfo')) {
            return $next($request);
        }
        $redirectName = config('prefix.portal_retail') . "/login";
        return redirect()->route($redirectName);
    }
}
