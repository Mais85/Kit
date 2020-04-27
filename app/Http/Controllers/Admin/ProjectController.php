<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends AdminBaseController
{

    public function index()
    {
        $title = 'Bütün Layihələr';
        $items =Project::paginate(8);
        return view('admin.project.index',compact('title','items'));
    }
}
