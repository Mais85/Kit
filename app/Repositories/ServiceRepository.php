<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Albom;
use App\Models\Company;
use App\Models\Service;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use function MongoDB\BSON\fromJSON;

class ServiceRepository extends AdminBaseController
{
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

    public function getAll()
    {
        return Service::all()->sortBy('pos_number');
    }

    public function getItembySlug($slug)
    {
        return Service::where('slug', $slug)->get();
    }

    public function getPaginate()
    {
        return Service::orderby('pos_number')->paginate(8);
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

    public function getAlbom(){
        return Albom::all()->pluck('name','id');
    }

    public function getSortingModel()
    {
        return Service::all()->sortBy('pos_number');
    }

    public function getFilteringModel($request,$pos=null)
    {
        $bigData = $this->getSortingModel();
        $temp = 0;
        foreach ($bigData as $elem){
            if($pos == null || $request->pos_number < $pos){
                if ($elem->pos_number == $request->pos_number){
                    $temp = $elem->pos_number+1;
                    $elem->update([
                        'pos_number' =>$request->pos_number+1,
                    ]);
                }elseif ($elem->pos_number== $pos){
                    break;
                } elseif ($elem->pos_number === $temp){
                    $temp = $elem->pos_number+1;
                    $elem->update([
                        'pos_number' =>$temp,
                    ]);
                }
            }else{
                if($elem->pos_number == $pos){
                    $temp = $pos;
                    continue;
                }elseif($elem->pos_number > $request->pos_number){
                    break;
                }elseif($elem->pos_number > $pos){
                    $elem->update([
                        'pos_number' =>$elem->pos_number-1,
                    ]);
                }
            }

        }
    }

    public function store($request)
    {
        return Service::create([
            'title' => $this->getFormTranslations('title',$request),
            'contents'=>$this->getFormTranslations('contents',$request),
            'img1' => $this->uploadImage($request->img1,'photos'),
            'img2' => $this->uploadImage($request->img2,'photos'),
            'pdf' => $this->uploadFile($request->pdf,'files'),
            'pos_number' => $request->pos_number,
            'slug' =>$this->getSlugFrom('title',$request),
            'company_id' =>$request->company,
            'albom_id' => $request->albom_id,
            'company_name' => $this->getCompanylist()[$request->company],
        ]);
    }

    public function update($request)
    {
        $item = cache('modServiceEdit');

        if($request->pos_number != $item->pos_number){
            $this->getFilteringModel($request,$item->pos_number);
        }

        return $item->update([
            'title' => $this->getFormTranslations('title',$request),
            'contents'=>$this->getFormTranslations('contents',$request),
            'img1' => $this->editImage($request->img1,$item->img1,$request->old_img1,'photos'),
            'img2' => $this->editImage($request->img2,$item->img2,$request->old_img2,'photos'),
            'pdf' => $this->editFile($request->pdf,$item->pdf,$request->oldpdf,'files'),
            'slug' =>$this->getSlugFrom('title',$request),
            'company_id' =>$request->company,
            'albom_id' => $request->albom_id,
            'pos_number' => $request->pos_number,
            'company_name' => $this->getCompanylist()[$request->company],
        ]);
    }

    public function filterAfterDestroying($pos)
    {
        $data =  $this->getSortingModel();
        $temp =null;
        foreach ($data as $val ){
            if($val->pos_number > $pos){
                $val->update([
                    'pos_number' => $val->pos_number - 1,
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
            $data = cache('modservice');
            $deleted_item = $data->where('id',$item)->first();
            $poss = $deleted_item->pos_number;
            $this->filterAfterDestroying($poss);
            $filename1 = $deleted_item->img1;
            $filename2 = $deleted_item->img2;
            $filepdf = $deleted_item->pdf;
            $pos = '/storage/photos/';
            $filename1 = str_replace($pos, '', $filename1);
            $filename2 = str_replace($pos, '', $filename2);
            $deleted_item->delete();
            if($deleted_item){
                if($filename1 || $filename2)
                    $this->deleteImage($filename1,'photos');
                    $this->deleteImage($filename2,'photos');
                    $this->deleteFile($filepdf,'files');

            }
        }
    }
}
