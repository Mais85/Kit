<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use Illuminate\Http\Request;

class AdminController extends AdminBaseController
{
    //
    public function index(){
        if(!cache('metrics') || isset($_GET['reMetrics'])){
            $metrics = json_encode([
                "time" => time(),
                //  "emaillists" => EmailLists::count(),
                //"unreademails" => EmailLists::all()->where('status',0)->count(),
            ]);
            cache(['metrics' => $metrics], now()->addMinutes(60*24*7));
            if(isset($_GET['reMetrics']))
                return redirect('/home');
        }
        $metrics = json_decode(cache('metrics'),true);
        $title = "Ana Səhifə";
        return view('admin.index',compact('title','metrics'));
    }
}
