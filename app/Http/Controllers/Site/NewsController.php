<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Models\News;
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
        if($request->ajax()) {
            if ($request->id > 0) {
                $items = News::where('id', '<', $request->)
                    ->orderBy('created_at', 'DESC')->limit(8)->get()
            } else {
                $items = $this->newsrepository->getByLimit();
            }
            $output = '';
            $last_id = '';
            if(!$items->isEmpty()) {
            }
              foreach ($items as $val){
                  $output.=" 
                  "
              }
            }
        }

    }

    public function show($local, $slug, $id)
    {
        return true;
    }
}
