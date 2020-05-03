<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\AlbomRequest;
use App\Repositories\AlbomRepository;


class AlbomController extends AdminBaseController
{
    /**
     * @var AlbomRepository
     */
    private  $albomrepository;

    /**
     * AlbomController constructor.
     * @param AlbomRepository $albomrepository
     */
    public function __construct(AlbomRepository $albomrepository)
    {
        $this->albomrepository = $albomrepository;
    }

    /**
     * Display a listening of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        $title = 'Bütün Albomlar';
        $items = $this->albomrepository->getPaginate();
        cache(['modAlb'=>$items],3600*24);
        return view ('admin.albom.inxdex',compact('title','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $title = 'Albom Yarat';
        return view('admin.albom.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AlbomRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(AlbomRequest $request)
    {
        $bvalidated = $request->validated();
        if($bvalidated){
            $this->albomrepository->store($request);
            return redirect('\admin\alboms')->with('message','Yaradılma əməliyyatı uğurla başa çatdı.');
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
        $title = 'Albom redaktəsi';
        $items = $this->albomrepository->getAlboms($slug,$id);
        $photos = $this->albomrepository->getPhotos($id);
        cache(['modAlbEdit' => $items],3600*24);
        return view('admin.albom.edit',compact('title','items','photos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AlbomRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(AlbomRequest $request)
    {
        $bvalidated = $request->validated();
        if($bvalidated){
            $this->albomrepository->update($request);
            return redirect('/admin/alboms')->with('message','Yenilənmə əməliyyatı uğurla başa çatdı.');
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
        $this->albomrepository->destroy($id);
        return redirect('/admin/alboms')->with('message','Silinmə əməliyyatı uğurla başa çatdı.');
    }
}
