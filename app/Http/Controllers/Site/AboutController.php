<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class AboutController extends HomeController
{
    public function index()
    {
       return view('site.about');
    }
}