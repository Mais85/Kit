<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Repositories\AboutPageRepository;
use Illuminate\Http\Request;

class AboutController extends HomeController
{
    /**
     * @var AboutPageRepository
     */
    private $aboutpagerepository;

    /**
     * AboutController constructor.
     * @param AboutPageRepository $aboutpagerepository
     */
    public function __construct(AboutPageRepository $aboutpagerepository)
    {
        $this->aboutpagerepository = $aboutpagerepository;
    }

    /**
     * Show About page
     * @return \Illuminate\Contracts\Support\Renderable|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $abItems = $this->aboutpagerepository->all();
        $abCer = $this->aboutpagerepository->getAllCertificates();
        $emp = $this->aboutpagerepository->getEmployeebysort();
       return view('site.about',compact('abItems','abCer','emp'));
    }
}
