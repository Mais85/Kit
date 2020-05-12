<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Site\HomeController;
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
        return view('site.index');
    }
}
