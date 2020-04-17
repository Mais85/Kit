<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\IndexPageRepository;
use App\Http\Requests\IndexPageRequest;

class IndexPageController extends AdminBaseController
{
    /**
     * @var IndexPageRepository
     */
    private $indexpagerepository;

    /**
     * IndexPageController constructor.
     * @param IndexPageRepository $indexPageRepository
     */
    public function __construct(IndexPageRepository $indexPageRepository)
    {
        $this->indexpagerepository = $indexPageRepository;
    }

    /**
     *  show index page editor
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index ()
    {
        $title = 'Ana Səhifə Redaktəsi';
        $items = $this->indexpagerepository->all();
        return view ('admin.pages.indexpage',compact('title','items'));
    }


    public function store(IndexPageRequest $request)
    {

        $bvalidated = $request->validated();
        if($bvalidated){
            $items = $this->indexpagerepository->all();
            if(isset($items)){
                $this->indexpagerepository->update($request, $items);
            }else{
                $this->indexpagerepository->store($request);
            }
            return redirect('/admin/pages/index')->with('message',' Uğurla yerinə yetirildi.');
        }else{

            return redirect()->back()->withErrors($bvalidated)->withInput();
        }

    }
}
