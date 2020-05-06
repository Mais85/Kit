<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Referance;
use Illuminate\Support\Str;

class ReferanceRepository extends AdminBaseController
{
    public function getAll()
    {
        return Referance::all();
    }

    public function getPaginate()
    {
        return Referance::paginate(8);
    }

    public function getReferance($slug,$id)
    {
        $data = cache('modRef');
        $items = $data->where('id',$id)->first();
        return $items;
    }

    public function store($request)
    {
        return Referance::create([
            'slug'=>Str::slug($request->title,'-'),
            'title' => $request->title,
            'desc' =>$this->getFormTranslations('desc',$request),
            'img' => $this->uploadImage($request->img,"referancephotos"),
        ]);
    }

    public function update($request)
    {
        $item = cache('modReferanceEdit');
        return $item->update([
            'slug'=>Str::slug($request->title,'-'),
            'title' => $request->title,
            'desc' =>$this->getFormTranslations('desc',$request),
            'img' => $this->editImage($request->img,$item->img,$request->old_img,"referancephotos"),
        ]);
    }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
            $data = cache('modRef');
            $deleted_item = $data->where('id',$item)->first();
            $filename = $deleted_item->img;
            $pos = '/storage/referancephotos/';
            $filename = str_replace($pos, '', $filename);
            $deleted_item->delete();
            if($deleted_item){
                if($filename)
                    $this->deleteImage($filename,'referancephotos');
            }
        }
    }
}