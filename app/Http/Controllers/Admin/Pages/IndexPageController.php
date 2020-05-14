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
     * @throws \Exception
     */
    public function index ()
    {
        $title = 'Ana Səhifə Redaktəsi';
        $items = $this->indexpagerepository->all();
        cache(['inpagemod'=> $items],3600*24);

        return view ('admin.pages.indexpage',compact('title','items'));
    }


    /**
     *  Create or update index page
     * @param IndexPageRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function store(IndexPageRequest $request)
    {
        $bvalidated = $request->validated();
        if($bvalidated){
         $data = cache('inpagemod');

           if(isset($data)){
               $items =$data;
           }else{
               $items = $this->indexpagerepository->all();
           }

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
