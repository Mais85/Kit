<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\AboutPageRequest;
use App\Repositories\AboutPageRepository;
use Illuminate\Http\Request;
use App\Models\AboutPage;

class AboutPageController extends AdminBaseController
{
    /**
     * @var $aboutPageRepository
     */
    private $aboutPageRepository;

    /**
     * AboutPageController constructor.
     * @param AboutPageRepository $aboutPageRepository
     */
     public function __construct(AboutPageRepository $aboutPageRepository)
     {
         $this->aboutPageRepository = $aboutPageRepository;
     }

    /**
     * Get and show about page data from db
     * @var $title
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        $title = 'Haqqımızda';
        $items = $this->aboutPageRepository->all();
        cache(['abpagemod' => $items], 3600*24);
        return view('admin.pages.aboutpage',compact('title','items'));
    }

    /**
     * Create or update about page data from db
     * @param AboutPageRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function store(AboutPageRequest $request)
    {
       $bvalidated = $request->validated();
        if($bvalidated){
           $data = cache('abpagemod');
           if(isset($data)){
               $items = $data;
           }else{
               $items = $this->aboutPageRepository->all();
           }
            if(isset($items)){
                $this->aboutPageRepository->update($items,$request);
            }else{
                $this->aboutPageRepository->store($request);
            }
            return redirect('/admin/pages/about-us')->with('message',' Uğurla əlavə edildi.');
        }else{
            return redirect()->back()->withErrors($bvalidated)->withInput();
        }
    }
}
