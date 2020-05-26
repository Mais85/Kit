<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends HomeController
{

    private $newsrepository;


    public function __construct(NewsRepository $newsrepository)
    {
        $this->newsrepository = $newsrepository;
    }


    public function index()
    {
        $items = $this->newsrepository->getByLimit();
        return view('site.news',compact('items'));
    }

    public function loadmorenews(Request $request)
    {
        if($request->ajax()){
                $items = $this->newsrepository->getByLimit();
                return view('site.news',compact('items'));
            }
    }

    public function show($local, $slug, $id)
    {
        return true;
    }
}
