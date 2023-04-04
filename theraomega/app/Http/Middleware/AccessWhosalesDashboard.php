<?php

namespace App\Http\Middleware;

use Closure;

class AccessWhosalesDashboard
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

        if ($request->session()->has('whosalesInfo')) {
            return $next($request);
        }
        $redirectName = config('prefix.portal_whosales') . "/login";
        return redirect()->route($redirectName);
    }
}
