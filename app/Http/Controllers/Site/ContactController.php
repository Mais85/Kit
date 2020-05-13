<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class ContactController extends HomeController
{
    public  function index()
    {
       return view('site.contact');
    }
}
