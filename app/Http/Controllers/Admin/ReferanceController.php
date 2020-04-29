<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\ReferanceRequest;
use App\Repositories\ReferanceRepository;


class ReferanceController extends AdminBaseController
{
    /**
     * @var ReferanceRepository
     */
    private $referancerepository;

    /**
     * ReferanceController constructor.
     * @param ReferanceRepository $referancerepository
     */
    public function __construct(ReferanceRepository $referancerepository)
    {
        $this->referancerepository = $referancerepository;
    }

    /**
     * Display a listening of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        $title = 'Bütün Referanslar';
        $items = $this->referancerepository->getPaginate();
        cache(['modRef'=> $items],3600*24);
        return view('admin.referance.index',compact('title','items'));
    }

    public function create()
    {
        $title = 'Referans Yarat';
        return view('admin.referance.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ReferanceRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ReferanceRequest $request)
    {
        $bvalidated = $request->validated();

        if($bvalidated){
            $this->referancerepository->store($request);
            return redirect('/admin/referances')->with('message','Yaradılma əməliyyatı uğurla başa çatdı.');
        }else{
            return redirect()->back()->withErrors($bvalidated)->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function edit($slug,$id)
    {
        $title = 'Referans redaktəsi';
        $items = $this->referancerepository->getReferance($slug,$id);
        cache(['modReferanceEdit' => $items],3600*24);
        return view('admin.referance.edit',compact('title','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ReferanceRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ReferanceRequest $request)
    {
        $bvalidated = $request->validated();
        if($bvalidated){
            $this->referancerepository->update($request);
            return redirect('/admin/referances')->with('message','Yenilənmə əməliyyatı uğurla başa çatdı.');
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
        $this->referancerepository->destroy($id);
        return redirect('/admin/referances')->with('message','Silinmə əməliyyatı uğurla başa çatdı.');
    }
}
