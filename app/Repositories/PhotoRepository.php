<?php


namespace App\Repositories;

use App\Models\Photo;
use App\Http\Controllers\Admin\AdminBaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PhotoRepository extends AdminBaseController
{
    public function store($request)
    {
        $photofiles = Photo::create([
            'img' => $this->uploadImage($request->file,"albumsphotos"),
            'user_id' => auth()->user()->id,
        ]);
        return ["photo_id"=>$photofiles->id];
    }

    public function delete()
    {
        //delete cancelled photo from storage
        $payLoad = json_decode(request()->getContent(), true);
        $item = Photo::where('id',$payLoad['photo_id'])->pluck('img')->first();
        $pos = '/storage/albumsphotos/';
        $item = str_replace($pos,'',$item);
        File::delete(base_path("storage/app/public/albumsphotos/".$item));

        //delete cancelled photo from database
        Photo::where([
            "id" => $payLoad['photo_id'],
            "user_id" => auth()->user()->id,
        ])->delete();
        return ["message"=>"success"];
    }

    public function delPhoto($id)
    {
        dd($id);
        $item = Photo::where('id',$id)->pluck('img')->first();
        $pos = '/storage/albumsphotos/';
        $item = str_replace($pos,'',$item);
        File::delete(base_path("storage/app/public/albumsphotos/".$item));
        $delete = Photo::find($id)->delete();
        if($delete){
            return ["type"=>"success"];
        }
    }

    public function update($request,$id)
    {
        $item = Photo::where('id',$id)->pluck('img')->first();
        $pos = '/storage/albumsphotos/';
        $item = str_replace($pos,'',$item);
        File::delete(base_path("storage/app/public/albumsphotos/".$item));
        $data = explode( ',', $request->img);
        $data = array_pop($data);
        $file = base64_decode($data);

        Storage::disk('local')->put($item, $file);

        return ["type"=>"success"];
    }
}
