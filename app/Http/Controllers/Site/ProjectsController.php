<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class ProjectsController extends HomeController
{
    public function index()
    {
        return view('site.our_projects');
    }
}
