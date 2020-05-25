<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\URL;

class LangController extends HomeController
{
    public function changeLang($local)
    {
        if(isset(request()->local) && in_array(request()->local,['az','en','ru'])){
            App::setLocale($local);
            session()->put('local', $local);
            $url = url()->previous();
            $arr = ['az','en','ru'];
            $newUrl = explode('/',$url);
            dd($newUrl);
            foreach ($arr as $value)
            {
                if(in_array($value,$newUrl)){
                    str_replace($value,$local,$newUrl);
                    break;
                }
            }
            dd($url,$newUrl);
            return redirect()->to($newUrl);
        }
    }
}
