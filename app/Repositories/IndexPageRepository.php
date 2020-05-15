<?php


namespace App\Repositories;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Client;
use App\Models\Company;
use App\Models\IndexPage;
use App\Http\Requests\IndexPageRequest;
use App\Models\News;
use App\Models\Referance;
use App\Models\Testimonial;
use Illuminate\Support\Str;

class IndexPageRepository extends AdminBaseController
{
   public function getSlug ($slug){
       return;
   }

   public function all ()
   {
        return IndexPage::find(1);
   }

   public function getBlok1photos()
   {
       return IndexPage::select('img3','img4','img5')->first()->toArray();
   }

   public function getClients()
   {
       return Client::select('logo')->get();
   }

   public function getNews()
   {
       return News::select(['id','title','desc','smallimg','created_at'])
           ->where('isPublished','!=',0)->limit(4)->orderBy('created_at','desc')->get();
   }
   public function getCompanylist()
   {
       return Company::all()->pluck('company','id');
   }

   public function getTest()
   {
       return  Testimonial::all()->sortByDesc('created_at');
   }

   public function getRef()
   {
       return  Referance::all()->sortByDesc('created_at');
   }

   public function store($request)
   {
      return IndexPage::create([
          'slug'=> Str::slug('main page edit','-'),
          'contents1' =>$this->getFormTranslations('contents1',$request),
          'contents2' =>$this->getFormTranslations('contents2',$request),
          'head_title' => $this->getFormTranslations('head_title',$request),
          'title1' => $this->getFormTranslations('title1',$request),
          'title2' => $this->getFormTranslations('title2',$request),
          'img1' => $this->uploadImage($request->img1,"photos"),
          'img2' => $this->uploadImage($request->img2,"photos"),
          'img3' => $this->uploadImage($request->img3,"photos"),
          'img4' => $this->uploadImage($request->img4,"photos"),
          'img5' => $this->uploadImage($request->img5,"photos"),
          'img6' => $this->uploadImage($request->img6,"photos"),
          'video' => $this->uploadFile($request->video,"videos"),

      ]);
   }

   public function update($request, $items)
   {
       return $items->update([
           'contents1' =>$this->getFormTranslations('contents1',$request),
           'contents2' =>$this->getFormTranslations('contents2',$request),
           'head_title' => $this->getFormTranslations('head_title',$request),
           'title1' => $this->getFormTranslations('title1',$request),
           'title2' => $this->getFormTranslations('title2',$request),
           'img1' => $this->editImage($request->img1,$items->img1,$request->old_img1,"photos"),
           'img2' => $this->editImage($request->img2,$items->img2,$request->old_img2,"photos"),
           'img3' => $this->editImage($request->img3,$items->img3,$request->old_img3,"photos"),
           'img4' => $this->editImage($request->img4,$items->img4,$request->old_img4,"photos"),
           'img5' => $this->editImage($request->img5,$items->img5,$request->old_img5,"photos"),
           'img6' => $this->editImage($request->img6,$items->img6,$request->old_img6,"photos"),
           'video' => $this->editFile($request->video,$items->video,$request->old_video,"videos"),
       ]);

   }
}
