<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Models\ProjectPage;
use App\Repositories\ProjectRepository;


class ProjectsController extends HomeController
{
    /**
     * @var ProjectRepository
     */
    private $projectrepository;

    /**
     * ProjectsController constructor.
     * @param ProjectRepository $projectrepository
     */
    public function __construct(ProjectRepository $projectrepository)
    {
        $this->projectrepository = $projectrepository;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\Support\Renderable|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $contents = $this->projectrepository->getPropage();
        $projects = $this->projectrepository->getAll();
        return view('site.our_projects',compact('contents','projects'));
    }

    /**
     *  Display the specified resource.
     *
     * @param $local
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show( $local,$slug)
    {
        $item = $this->projectrepository->getProjectbySlug($slug);
        $projects = $this->projectrepository->getAll();
        return view('site.project',compact('item','projects'));
    }
}
