<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\IndexPage;
use App\Repositories\IndexPageRepository;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    }
}
