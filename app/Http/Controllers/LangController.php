<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;

class LangController extends HomeController
{
    public function changeLang($local)
    {
//        dd($local);
        if(isset($local) && in_array($local,['az','en','ru'])){
            App::setLocale($local);
            session()->put('local',$local);
            cookie('local',$local,60*24*30);
            return view('site.index');
        }elseif(isset($local) && !(in_array($local,['az','en','ru']))){
            abort(404);
        }
    }
}
