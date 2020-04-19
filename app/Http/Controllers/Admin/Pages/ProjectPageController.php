<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectPageRequest;
use App\Repositories\ProjectPageRepository;
use Illuminate\Http\Request;

class ProjectPageController extends AdminBaseController
{
    /**
     * @var ProjectPageRepository
     */
    private $projectpagerepository;

    /**
     * ProjectPageController constructor.
     * @param ProjectPageRepository $projectpagerepository
     */
    public function __construct(ProjectPageRepository $projectpagerepository)
    {
        $this->projectpagerepository = $projectpagerepository;
    }

    /**
     * Get and show Project page data from db
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        $title = 'Layihələr';
        $items = $this->projectpagerepository->all();
        cache(['propagemod' => $items],3600*24);
        return view('admin.pages.projectpage',compact('title','items'));
    }

   public function store(ProjectPageRequest $request)
   {
       $bvalitated = $request->validated();

       if($bvalitated){

       }else{

       }
   }
}
