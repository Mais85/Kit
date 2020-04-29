<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\CertificateRequest;
use App\Repositories\CertificateRepository;


class CertificateController extends AdminBaseController
{
    private $certificaterepository;

    public function __construct(CertificateRepository $certificateRepository)
    {
        $this->certificaterepository = $certificateRepository;
    }

    /**
     * Display a listening of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        $title = 'Bütün Sertifikatlar';
        $items = $this->certificaterepository->getPaginate();
        cache(['modCertificate'=> $items],3600*24);
        return view('admin.certificate.index',compact('title','items'));
    }

    public function create()
    {
        $title = 'Sertifikat Yarat';
        return view('admin.certificate.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CertificateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CertificateRequest $request)
    {
        $bvalidated = $request->validated();

        if($bvalidated){
            $this->certificaterepository->store($request);
            return redirect('/admin/certificates')->with('message','Yaradılma əməliyyatı uğurla başa çatdı.');
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
        $items = $this->certificaterepository->getReferance($slug,$id);
        cache(['modCertificateEdit' => $items],3600*24);
        return view('admin.certificate.edit',compact('title','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CertificateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(CertificateRequest $request)
    {
        $bvalidated = $request->validated();
        if($bvalidated){
            $this->certificaterepository->update($request);
            return redirect('/admin/certificates')->with('message','Yenilənmə əməliyyatı uğurla başa çatdı.');
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
        $this->certificaterepository->destroy($id);
        return redirect('/admin/certificates')->with('message','Silinmə əməliyyatı uğurla başa çatdı.');
    }
}
