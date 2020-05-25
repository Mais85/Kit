<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Localization
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
        if(isset($request->local) && in_array($request->local,['az','en','ru'])){
            if (session()->has('local')) {
                App::setLocale(session()->get('local'));
            }
        }
        return $next($request);
    }
}
