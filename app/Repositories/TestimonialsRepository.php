<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Testimonial;
use Illuminate\Support\Str;

class TestimonialsRepository extends AdminBaseController
{
      public function getAll()
      {
        return Testimonial::all();
      }

      public function getPaginate()
      {
          return Testimonial::paginate(8);
      }

      public function getTestimon($id)
      {
          $data = cache('modTesti');
          return $item = $data->where('id',$id)->first();
      }

      public function store($request)
      {
          return Testimonial::create([
              'slug'=>Str::slug($request->username,'-'),
              'username' => $request->username,
              'company' =>$request->company,
              'position' =>$this->getFormTranslations('position',$request),
              'contents' =>$this->getFormTranslations('contents',$request),
              'facebook' => $request->facebook,
              'twitter' => $request->twitter,
              'instagram' => $request->instagram,
              'linkedin' => $request->linkedin,
              'img' => $this->uploadImageFit($request->img,"smallphotos",$this->__thumbs),
          ]);
      }

      public function update($request)
      {
          $item = cache('modTestimEdit');
          return $item->update([
              'slug'=>Str::slug($request->username,'-'),
              'username' => $request->username,
              'company' =>$request->company,
              'position' =>$this->getFormTranslations('position',$request),
              'contents' =>$this->getFormTranslations('contents',$request),
              'facebook' => $request->facebook,
              'twitter' => $request->twitter,
              'instagram' => $request->instagram,
              'linkedin' => $request->linkedin,
              'img' => $this->editImageFit($request->img,$item->img,$request->old_img,"smallphotos",$this->__thumbs),
          ]);
      }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
            $data = cache('modTesti');
            $deleted_item = $data->where('id',$item)->first();
            $filename = $deleted_item->img;
            $pos = '/storage/smallphotos/';
            $filename = str_replace($pos, '', $filename);
            $deleted_item->delete();
            if($deleted_item){
                if($filename)
                    $this->deleteImage($filename,'smallphotos');
            }
        }
    }
}
