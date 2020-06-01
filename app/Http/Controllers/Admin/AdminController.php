<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Albom;
use App\Models\Certificate;
use App\Models\Client;
use App\Models\Company;
use App\Models\Employee;
use App\Models\News;
use App\Models\Project;
use App\Models\Referance;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminController extends AdminBaseController
{
    //
    public function index(){
        if(!cache('metrics') || isset($_GET['reMetrics'])){
            $metrics = json_encode([
                "time" => time(),
                  "company" => Company::count(),
                  "employee"=> Employee::count(),
                  "news"=> News::count(),
                  "service"=> Service::count(),
                  "project"=> Project::count(),
                  "client"=> Client::count(),
                  "testi"=> Testimonial::count(),
                  "referans"=> Referance::count(),
                  "sertificat"=> Certificate::count(),
                  "albums"=> Albom::count(),
            ]);
            cache(['metrics' => $metrics], now()->addMinutes(60*24*7));
            if(isset($_GET['reMetrics']))
                return redirect('/admin');
        }
        $metrics = json_decode(cache('metrics'),true);
        $title = "Ana Səhifə";
        return view('admin.index',compact('title','metrics'));
    }
}
