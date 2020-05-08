<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\NewsCreateRequest;
use App\Http\Requests\NewsUpdateRequest;
use Illuminate\Http\Request;
use App\Repositories\NewsRepository;

class NewsController extends AdminBaseController
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        $title = 'Xəbərlər';
        $items = $this->newsrepository->paginate();
        cache(['modnews' => $items],3600*24);
        return view('admin.news.index',compact('title','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Xəbər Yarat';
        $alboms = $this->newsrepository->getAlbom();
        return view('admin.news.create',compact('title','alboms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(NewsCreateRequest $request)
    {
        $bvalidated = $request->validated();
        if($bvalidated){
            $this->newsrepository->store($request);
            return redirect('\admin\news')->with('message','Yaradılma əməliyyatı uğurla başa çatdı.');
        }else{
            abort(404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $slug
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function edit($slug,$id)
    {
        $title = 'Xəbər redaktəsi';
        $items = $this->newsrepository->getNews($slug,$id);
        $alboms = $this->newsrepository->getAlbom();
        cache(['modNewsEdit' => $items],3600*24);
        return view('admin.news.edit',compact('title','items','alboms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(NewsUpdateRequest $request)
    {
        $bvalidated = $request->validated();
        if($bvalidated){
            $this->newsrepository->update($request);
            return redirect('/admin/news')->with('message','Yenilənmə əməliyyatı uğurla başa çatdı.');
        }else{
            return redirect()->back()->withErrors($bvalidated)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->newsrepository->destroy($id);
        return redirect('/admin/news')->with('message','Silinmə əməliyyatı uğurla başa çatdı.');
    }
}
