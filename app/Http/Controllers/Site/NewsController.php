<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends HomeController
{

    /**
     * @var NewsRepository
     */
    private $newsrepository;

    /**
     * NewsController constructor.
     * @param NewsRepository $newsrepository
     */
    public function __construct(NewsRepository $newsrepository)
    {
        $this->newsrepository = $newsrepository;
    }

    /**
     *  Display a listing of the resource.
     * @return \Illuminate\Contracts\Support\Renderable|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $items = $this->newsrepository->getByPaginate();
        return view('site.news',compact('items'));
    }


    /**
     * Display the specified resource.
     * @param $local
     * @param $slug
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($local, $slug, $id)
    {
        $item = $this->newsrepository->getById_Slug($slug,$id);
        $othernews = $this->newsrepository->getOthernews($id);
        return view ('site.news_item',compact('item','othernews'));
    }
}
