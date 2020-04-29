<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\PartnersRequest;
use App\Repositories\PartnersRepository;
use Illuminate\Http\Request;

class PartnerController extends AdminBaseController
{
    /**
     * @var PartnersRepository
     */
    private $partnersrepository;

    /**
     * PartnerController constructor.
     * @param PartnersRepository $partnersrepository
     */
    public function __construct(PartnersRepository $partnersrepository)
    {
        $this->partnersrepository = $partnersrepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        $title = 'Bütün Müştərilər';
        $items = $this->partnersrepository->getPaginate();
        cache(['modClient'=>$items],3600*24);
        return view('admin.partners.index',compact('title','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $title = 'Müştəri Yarat';
        return view ('admin.partners.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnersRequest $request)
    {
        $bvalidated = $request->validated();
        if($bvalidated){
            $this->partnersrepository->store($request);
            return redirect('\admin\partners')->with('message','Yaradılma əməliyyatı uğurla başa çatdı.');
        }else{
            abort(404);
        }
    }

    /**
     *  Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function edit($id)
    {
        $title = 'Müştəri redaktəsi';
        $items = $this->partnersrepository->getPartners($id);
        cache(['modClientedit'=>$items],3600*24);
        return view ('admin.partners.edit',compact('title','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PartnersRequest $request)
    {
        $bvalidated = $request->validated();
        if($bvalidated){
            $this->partnersrepository->update($request);
            return redirect('/admin/partners')->with('message','Yenilənmə əməliyyatı uğurla başa çatdı.');
        }else{
            return redirect()->back()->withErrors($bvalidated)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $this->partnersrepository->destroy($id);
        return redirect('/admin/partners')->with('message','Silinmə əməliyyatı uğurla başa çatdı.');
    }
}
