<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class Tes_RefController extends HomeController
{
    public function index()
    {
      return view('site.tes_ref');
    }
}
