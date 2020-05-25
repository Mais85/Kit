<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Repositories\PartnersRepository;
use Illuminate\Http\Request;

class ClientsController extends HomeController
{
    private  $clientsrepository;

    public function __construct(PartnersRepository $clientsrepository)
    {
        $this->clientsrepository = $clientsrepository;
    }

    public function index()
    {
        $items = $this->clientsrepository->getAll();
       return view('site.clients',compact('items'));
    }
}
