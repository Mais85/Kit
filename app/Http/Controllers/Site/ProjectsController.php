<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class ProjectsController extends HomeController
{
    private $projectrepository;

    public function __construct(ProjectRepository $projectrepository)
    {
        $this->projectrepository = $projectrepository;
    }

    public function index()
    {
        $contents = $this->projectrepository->getPropage();
        $projects = $this->projectrepository->getAll();
//        dd($projects);
        return view('site.our_projects',compact('contents','projects'));
    }
}
