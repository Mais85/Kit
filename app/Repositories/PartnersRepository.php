<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Client;
use Illuminate\Support\Facades\File;

class PartnersRepository extends  AdminBaseController
{
    public function getAll()
    {
        return Client::all();
    }

    public function getPaginate()
    {
        return Client::paginate(8);
    }

    public function getPartners($id)
    {
        $data = cache('modClient');
        $item = $data->where('id',$id)->first();
        return $item;
    }

    public function store($request)
    {
        return Client::create([
            'name' => $request->name,
            'logo' => $this->uploadImage($request->logo,'logos'),
            'link' => $request->link,
        ]);
    }

    public function update($request)
    {
        $item = cache('modClientedit');
        return $item->update([
            'name' => $request->name,
            'logo' => $this->editImage($request->logo,$item->logo,$request->old_logo,'logos'),
            'link' => $request->link,
        ]);
    }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
            $data = cache('modClient');
            $deleted_item = $data->where('id',$item)->first();
            $filename = $deleted_item->logo;
            $pos = '/storage/logos/';
            $filename = str_replace($pos, '', $filename);
            $deleted_item->delete();
            if($deleted_item){
                if($filename)
                    File::delete(base_path("storage/app/public/logos/".$filename));
            }
        }
    }
}
