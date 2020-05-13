<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class ServicesController extends HomeController
{
    public function index()
    {
        return view('site.services');
    }
}
