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
            App::setLocale($request->local);
            session()->put('local',$request->local);
            cookie('local',$request->local,60*24*30);
        }elseif(isset($request->local) && !(in_array($request->local,['az','en','ru']))){
            abort(404);
        }
        return $next($request);
    }
}
