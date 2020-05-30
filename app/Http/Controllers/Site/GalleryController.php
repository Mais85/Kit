<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\HomeController;
use App\Models\Photo;
use App\Repositories\AlbomRepository;
use Illuminate\Http\Request;

class GalleryController extends HomeController
{
    private $albomrepository ;

    public function __construct(AlbomRepository $albomrepository)
    {
        $this->albomrepository = $albomrepository;
    }

    public  function index()
    {
        $items = $this->albomrepository->getAll();
        $items = $items->where('isPublished',1);
        $temp = $items->first();
        $photos = Photo::where('albom_id',$temp->id)->get();
        $img = $photos->pluck('img')->first();
//        dd($img);
//        dd($photos);
        return view('site.gallery',compact('items','item','photos','img'));
    }
}
