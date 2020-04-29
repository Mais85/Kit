<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\TestimonialsCreateRequest;
use App\Http\Requests\TestimonialsUpdateRequest;
use App\Repositories\TestimonialsRepository;
use Illuminate\Http\Request;

class TestimonialsController extends AdminBaseController
{
    /**
     * @var TestimonialsRepository
     */
    private $testimonialsrepository;

    /**
     * TestimonialsController constructor.
     * @param TestimonialsRepository $testimonialsrepository
     */
    public function __construct(TestimonialsRepository $testimonialsrepository)
    {
        $this->testimonialsrepository = $testimonialsrepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        $title =  'Bütün Rəylər';
        $items = $this->testimonialsrepository->getPaginate();
        cache(['modTesti' => $items],3600*24);
        return view('admin.testimonials.index',compact('title','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Rəy Yarat';
        return view ('admin.testimonials.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialsCreateRequest $request)
    {
        $bvalidated = $request->validated();

        if($bvalidated){
            $this->testimonialsrepository->store($request);
            return redirect('/admin/testimonials')->with('message','Yaradılma əməliyyatı uğurla başa çatdı.');
        }else{
            return redirect()->back()->withErrors($bvalidated)->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param $slug
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function edit($slug,$id)
    {
        $title = 'İşçi redaktəsi';
        $items = $this->testimonialsrepository->getTestimon($id);
        cache(['modTestimEdit' => $items],3600*24);
        return view('admin.testimonials.edit',compact('title','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TestimonialsUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(TestimonialsUpdateRequest $request)
    {
        $bvalidated = $request->validated();
        if($bvalidated){
            $this->testimonialsrepository->update($request);
            return redirect('/admin/testimonials')->with('message','Yenilənmə əməliyyatı uğurla başa çatdı.');
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
        $this->testimonialsrepository->destroy($id);
        return redirect('/admin/testimonials')->with('message','Silinmə əməliyyatı uğurla başa çatdı.');
    }
}
