<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Albom;
use App\Models\Photo;
use Illuminate\Support\Facades\Artisan;
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
        return Albom::paginate(8);
    }

    public function getAlboms($slug, $id)
    {
//        $data = cache('modAlb');
        $data = $this->getPaginate();
        $item = $data->where('id', $id)->first();
        return $item;
    }

    public function getPhotos($id)
    {
        return Photo::where('albom_id', $id)->get();
    }

    public function delPhotoFromStorage($id)
    {
        $ids = explode(',',$id);
        foreach ($ids as $el){
            $items = Photo::where('albom_id',$el)->get()->pluck('img');
            $pos = '/storage/albumsphotos/';
                foreach ($items as $item)
                {
                    $item = str_replace($pos,'',$item);
                    File::delete(base_path("storage/app/public/albumsphotos/".$item));
                }
        }

    }

    public function store($request)
    {
        $data =  Albom::create([
            'slug' =>Str::slug($request->name,'-'),
            'name' =>$request->name,
            'coverimg' =>$this->uploadImageFit($request->img,'smallphotos',$this->__thumbs),
            'isPublished' => $request->isPublished
        ]);

        if($data){
            $id = auth()->user()->id;
            $elems = Photo::select('id')->where([['albom_id',null],['user_id',$id]])->get();
            $idAlbom= Albom::where('name',$request->name)->pluck('id')->first();

            foreach ($elems as $el){
                $el->update([
                   'albom_id'=>$idAlbom,
                ]);
            }
        }
    }

    public function update($request,$id)
    {
//        $item = cache('modAlbEdit');
         $item = Albom::findOrFail($id);
         $data = $item->update([
            'slug' =>Str::slug($request->name,'-'),
            'name' =>$request->name,
            'coverimg' =>$this->editImageFit($request->img,$item->coverimg,$request->old_img,'smallphotos',$this->__thumbs),
            'isPublished' => $request->isPublished
        ]);

        if($data){
            $id = auth()->user()->id;
            $elems = Photo::select('id')->where([['albom_id',null],['user_id',$id]])->get();
            $idAlbom= Albom::where('name',$request->name)->pluck('id')->first();

            foreach ($elems as $el){
                $el->update([
                    'albom_id'=>$idAlbom,
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
//            $data = cache('modAlb');
            $data = $this->getPaginate();
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
