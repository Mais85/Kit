<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Controllers\Controller;
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $title = 'Haqqımızda';
        $items = $this->aboutPageRepository->all();
        return view('admin.pages.aboutpage',compact('title','items'));
    }


    public function store(Request $request)
    {

        $validated = Validator::make($request->all(),[
            'content1_'.config('app.locale') => 'required|string',
            'title1_'.config('app.locale') => 'required|string',
            'image1' => 'nullable|image',
            'image2' => 'nullable|image',

        ]);

        if($validated->fails()){
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $items = About::find(1);
        if(isset($items)){
            $item = $items->update([

                'content1' =>$this->getFormTranslations('content1',$request),
                'content2' =>$this->getFormTranslations('content2',$request),
                'title1' => $this->getFormTranslations('title1',$request),
                'title2' => $this->getFormTranslations('title2',$request),
                'img1' => $this->editImage($request->image1,$items->img1,$request->old_img1,"photos"),
                'img2' => $this->editImage($request->image2,$items->img2,$request->old_img2,"photos"),
            ]);

        }else{
            $item = About::create([
                'slug'=> 'about-us',
                'content1' =>$this->getFormTranslations('content1',$request),
                'content2' =>$this->getFormTranslations('content2',$request),
                'title1' => $this->getFormTranslations('title1',$request),
                'title2' => $this->getFormTranslations('title2',$request),
                'img1' => $this->uploadImage($request->image1,"photos"),
                'img2' => $this->uploadImage($request->image2,"photos"),
            ]);
        }
        return redirect('/admin/pages/about-us')->with('message',' Uğurla əlavə edildi.');
    }
}
