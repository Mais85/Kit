<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\HomeController;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


    public function index()
    {
        $services = $this->servicerepository->getAll();
        dd(Route::currentRouteName());
        return view('site.services',compact('services'));
    }
}
