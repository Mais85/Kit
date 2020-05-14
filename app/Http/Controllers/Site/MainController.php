<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Models\Company;
use App\Repositories\IndexPageRepository;

class MainController extends HomeController
{
    /**
     * @var IndexPageRepository
     */
    private $indexpagerepository;

    public function __construct(IndexPageRepository $indexpagerepository)
    {
        $this->indexpagerepository = $indexpagerepository;
    }

    public function index()
    {
        $photoblock1 = $this->indexpagerepository->getBlok1photos();
        $clients = $this->indexpagerepository->getClients();
        //dd($clients);
        return view('site.index',compact('photoblock1','clients'));
    }
}
