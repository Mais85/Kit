<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class NewsController extends HomeController
{
    public  function  index()
    {
      return view('site.news');
    }
}
