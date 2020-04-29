<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Company;
use App\Models\Service;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ServiceRepository extends AdminBaseController
{
    private function getSlugFrom($name, $request)
    {
        $slug = $this->getFormTranslations($name,$request);
        foreach ($slug as &$item){
            $item = Str::slug($item,'-').'-'.time();
        }
        return $slug;
    }

    public function getAll()
    {
        return Service::all();
    }

    public function getPaginate()
    {
        return Service::paginate(8);
    }

    public function getCompanylist()
    {
        return Company::all()->pluck('company','id');
    }

    public function getServices($id)
    {
        $data = cache('modservice');
        $item = $data->where('id',$id)->first();
        return $item;
    }

    public function store($request)
    {
        return Service::create([
            'title' => $this->getFormTranslations('title',$request),
            'contents'=>$this->getFormTranslations('contents',$request),
            'img1' => $this->uploadImage($request->img1,'photos'),
            'img2' => $this->uploadImage($request->img2,'photos'),
            'slug' =>$this->getSlugFrom('title',$request),
            'company_id' =>$request->company,
            'company_name' => $this->getCompanylist()[$request->company],
        ]);
    }

    public function update($request)
    {
        $item = cache('modServiceEdit');
        return $item->update([
            'title' => $this->getFormTranslations('title',$request),
            'contents'=>$this->getFormTranslations('contents',$request),
            'img1' => $this->editImage($request->img1,$item->img1,$request->old_img1,'photos'),
            'img2' => $this->editImage($request->img2,$item->img2,$request->old_img2,'photos'),
            'slug' =>$this->getSlugFrom('title',$request),
            'company_id' =>$request->company,
            'company_name' => $this->getCompanylist()[$request->company],
        ]);
    }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
            $data = cache('modservice');
            $deleted_item = $data->where('id',$item)->first();
            $filename1 = $deleted_item->img1;
            $filename2 = $deleted_item->img2;
            $pos = '/storage/photos/';
            $filename1 = str_replace($pos, '', $filename1);
            $filename2 = str_replace($pos, '', $filename2);
            $deleted_item->delete();
            if($deleted_item){
                if($filename1 || $filename2)
                    $this->deleteImage($filename1,'photos');
                    $this->deleteImage($filename2,'photos');

            }
        }
    }
}
