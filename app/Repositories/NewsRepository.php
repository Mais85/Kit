<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Albom;
use App\Models\News;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class NewsRepository  extends AdminBaseController
{

    public  function all()
    {
        return News::all();
    }

    public function paginate()
    {
        return News::paginate(8);
    }

    public function getByPaginate()
    {
       return News::where('isPublished',1)->paginate(8);
    }

    public  function getByLimit()
    {
        return News::limit(8)->get();
    }

    public function getNews($slug,$id)
    {
        $data= cache('modnews');
        $item = $data->where('id',$id)->first();
        return $item;
    }

    private function getSlugFrom($name, $request)
    {
        $slug = $this->getFormTranslations($name,$request);
        foreach ($slug as &$item){
            if($item !=null){
                $item = Str::slug($item,'-');
                break;
            }

        }
        return $item;
    }

    private function getDescFrom($name,$request)
    {
        $desc = $this->getFormTranslations($name,$request);
        foreach ($desc as &$value){
            $value = Str::substr($value,0,139);
        }
        return $desc;
    }

    public function getAlbom(){
        return Albom::all()->pluck('name','id');
    }

    public function store($request)
    {
         return News::create([
             'title' => $this->getFormTranslations('title',$request),
             'contents'=>$this->getFormTranslations('contents',$request),
             'desc' =>  $this->getDescFrom('contents',$request),
             'img' => $this->uploadImage($request->img,'photos'),
             'smallimg' => $this->uploadImageFit($request->img,'smallphotos',$this->__thumbs),
             'isPublished' => $request->status,
             'albom_id' => $request->albom_id,
             'slug' =>$this->getSlugFrom('title',$request),
         ]);
    }

    public function update($request)
    {
        $item = cache('modNewsEdit');
          return $item->update([
            'title' => $this->getFormTranslations('title',$request),
            'contents'=>$this->getFormTranslations('contents',$request),
            'desc' => $this->getDescFrom('contents',$request),
            'img' => $this->editImage($request->img,$item->img,$request->old_img,'photos'),
            'smallimg' => $this->editImageFit($request->img,$item->smallimg,$request->old_img,'smallphotos',$this->__thumbs),
            'isPublished' => $request->status,
            'albom_id' => $request->albom_id,
            'slug' =>$this->getSlugFrom('title',$request),
        ]);
    }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
            $data = cache('modnews');
            $deleted_item = $data->where('id',$item)->first();
            $filename1 = $deleted_item->img;
            $filename2 = $deleted_item->smallimg;
            $pos1 = '/storage/photos/';
            $pos2 = '/storage/smallphotos/';
            $filename1 = str_replace($pos1, '', $filename1);
            $filename2 = str_replace($pos2, '', $filename2);
            $deleted_item->delete();
            if($deleted_item){
                if($filename1 || $filename2)
                    $this->deleteImage($filename1,'photos');
                File::delete(base_path("storage/app/public/smallphotos/".$filename2));

            }
        }
    }
}
