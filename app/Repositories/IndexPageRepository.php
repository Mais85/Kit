<?php


namespace App\Repositories;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\IndexPage;
use App\Http\Requests\IndexPageRequest;
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

   public function store($request)
   {
      return IndexPage::create([
          'slug'=> Str::slug('main page edit','-'),
          'contents1' =>$this->getFormTranslations('contents1',$request),
          'contents2' =>$this->getFormTranslations('contents2',$request),
          'title1' => $this->getFormTranslations('title1',$request),
          'title2' => $this->getFormTranslations('title2',$request),
          'img1' => $this->uploadImage($request->img1,"photos"),
          'img2' => $this->uploadImage($request->img2,"photos"),

      ]);
   }

   public function update($request, $items)
   {
       return $items->update([
           'contents1' =>$this->getFormTranslations('contents1',$request),
           'contents2' =>$this->getFormTranslations('contents2',$request),
           'title1' => $this->getFormTranslations('title1',$request),
           'title2' => $this->getFormTranslations('title2',$request),
           'img1' => $this->editImage($request->img1,$items->img1,$request->old_img1,"photos"),
           'img2' => $this->editImage($request->img2,$items->img2,$request->old_img2,"photos"),
       ]);

   }
}
