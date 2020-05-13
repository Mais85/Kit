<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class GalleryController extends HomeController
{
    public  function index()
    {
     return view('site.gallery');
    }
}
