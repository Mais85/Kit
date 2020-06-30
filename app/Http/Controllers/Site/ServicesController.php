<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\HomeController;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ServicesController extends HomeController
{
    /**
     * @var ServiceRepository
     */
    private $servicerepository ;

    /**
     * ServicesController constructor.
     * @param ServiceRepository $servicerepository
     */
    public function __construct(ServiceRepository $servicerepository)
    {
        $this->servicerepository = $servicerepository;
    }

    /**
     * Show services index page
     * @return \Illuminate\Contracts\Support\Renderable|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $services = $this->servicerepository->getAll();
        $item = $services->first();
//        dd($item)->dd();
        return view('site.services',compact('services','item'));
    }

    /**
     * Show service
     * @param $local
     * @param null $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show ($local,$slug = null)
    {
         $services = $this->servicerepository->getAll();
         $item= $this->servicerepository->getItembySlug($slug)->first();
       return view ('site.services',compact('services','item'));
    }
}
