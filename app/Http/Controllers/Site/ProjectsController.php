<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Models\ProjectPage;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        return view('site.our_projects',compact('contents','projects'));
    }

    public function show( $local,$slug)
    {
        $item = $this->projectrepository->getProjectbySlug($slug);
        $projects = $this->projectrepository->getAll();
        return view('site.project',compact('item','projects'));
    }
}
