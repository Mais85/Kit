<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\ServiceCreateRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ServiceController extends AdminBaseController
{
    /**
     * @var ServiceRepository
     */
    private $servicerepository;

    /**
     * ServiceController constructor.
     * @param ServiceRepository $servicerepository
     */
    public function __construct(ServiceRepository $servicerepository)
    {
        $this->servicerepository = $servicerepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index ()
    {
        $title = 'Bütün Xidmətlər';
        $items = $this->servicerepository->getPaginate();
        cache(['modservice' =>$items],3600*24);
        return view('admin.service.index',compact('title','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Xidmət Yarat';
        $companies = $this->servicerepository->getCompanylist();
        $alboms = $this->servicerepository->getAlbom();
        return view('admin.service.create',compact('title','companies','alboms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ServiceCreateRequest $request)
    {
        $bvalidated = $request->validated();
        if ($bvalidated) {
            $this->servicerepository->store($request);
            return redirect('\admin\services')->with('message', 'Yaradılma əməliyyatı uğurla başa çatdı.');
        } else {
            abort(404);
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
        $title = 'Xəbər redaktəsi';
        $items = $this->servicerepository->getServices($id);
        $companies = $this->servicerepository->getCompanylist();
        $alboms = $this->servicerepository->getAlbom();
        cache(['modServiceEdit' => $items],3600*24);
        return view ('admin.service.edit',compact('title','items','companies','alboms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update (ServiceUpdateRequest $request)
    {
        $bvalidated = $request->validated();
        if($bvalidated){
            $this->servicerepository->update($request);
            return redirect('/admin/services')->with('message','Yenilənmə əməliyyatı uğurla başa çatdı.');
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
        $this->servicerepository->destroy($id);
        return redirect('/admin/services')->with('message','Silinmə əməliyyatı uğurla başa çatdı.');
    }
}
