<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Project;
use App\Repositories\ProjectPageRepository;
use App\Repositories\ProjectRepository;

class ProjectController extends AdminBaseController
{

    private $projectrepository;

    public function __construct(ProjectRepository $projectrepository)
    {
        $this->projectrepository = $projectrepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        $title = 'Bütün Layihələr';
        $items = $this->projectrepository->getPaginate();
        cache(['modProject' => $items],3600*24);
        return view('admin.project.index',compact('title','items'));
    }

    public function create()
    {
        $title = 'Layihə Yarat';
        return view('admin.project.create')->with(['title'=>$title]);
    }
}
