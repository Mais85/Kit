<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Albom;
use App\Models\Photo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AlbomRepository extends AdminBaseController
{
    public function getAll()
    {
        return Albom::all();
    }

    public function getPaginate()
    {
        return  Albom::paginate(8);
    }

    public function getAlboms($slug,$id)
    {
        $data= cache('modAlb');
        $item = $data->where('id',$id)->first();
        return $item;
    }

    public function getPhotos($id)
    {
        return Photo::where('id',$id)->get();
    }

    public function store($request)
    {
        return Albom::create([
            'slug' =>Str::slug($request->name,'-'),
            'name' =>$request->name,
            'coverimg' =>$this->uploadImageFit($request->img,'smallphotos',$this->__thumbs),
            'isPublished' => $request->isPublished
        ]);
    }

    public function update($request)
    {
        $item = cache('modAlbEdit');
        return $item->update([
            'slug' =>Str::slug($request->name,'-'),
            'name' =>$request->name,
            'coverimg' =>$this->editImageFit($request->img,$item->img,$request->old_img,'smallphotos',$this->__thumbs),
            'isPublished' => $request->isPublished
        ]);
    }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
            $data = cache('modAlb');
            $deleted_item = $data->where('id',$item)->first();
            $filename = $deleted_item->coverimg;
            $pos = '/storage/smallphotos/';
            $filename = str_replace($pos, '', $filename);
            $deleted_item->delete();
            if($deleted_item){
                if($filename )
                    $this->deleteImage($filename,'smallphotos');
            }
        }
    }
}
