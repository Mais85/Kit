<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Certificate;
use Illuminate\Support\Str;

class CertificateRepository extends AdminBaseController
{
    public function getAll()
    {
        return Certificate::all();
    }

    public function getPaginate()
    {
        return Certificate::paginate(8);
    }

    public function getReferance($slug,$id)
    {
        $data = cache('modCertificate');
        $items = $data->where('id',$id)->first();
        return $items;
    }

    public function store($request)
    {
        return Certificate::create([
            'slug'=>Str::slug($request->title,'-'),
            'title' => $request->title,
            'desc' =>$this->getFormTranslations('desc',$request),
            'img' => $this->uploadImage($request->img,"certificatephotos"),
        ]);
    }

    public function update($request)
    {
        $item = cache('modCertificateEdit');
        return $item->update([
            'slug'=>Str::slug($request->title,'-'),
            'title' => $request->title,
            'desc' =>$this->getFormTranslations('desc',$request),
            'img' => $this->editImage($request->img,$item->img,$request->old_img,"certificatephotos"),
        ]);
    }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
            $data = cache('modCertificate');
            $deleted_item = $data->where('id',$item)->first();
            $filename = $deleted_item->img;
            $pos = '/storage/certificatephotos/';
            $filename = str_replace($pos, '', $filename);
            $deleted_item->delete();
            if($deleted_item){
                if($filename)
                    $this->deleteImage($filename,'certificatephotos');
            }
        }
    }
}
