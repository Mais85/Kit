<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\Companycreaterequest;
use App\Models\Albom;
use App\Models\Company;
use Illuminate\Support\Str;

class Companyrepository extends AdminBaseController
{
    public  function all()
    {
        return Company::all();
    }

    public function getBySort()
    {
        return Company::all()->sortBy('pos_number');
    }

    public function getWithId($id)
    {
        return Company::findOrFail($id);
    }

    public function getWithSlug($slug)
    {
       $items = Company::where('slug',$slug)->first();
        return $items;
    }

    public function getWithSlug_Id($slug,$id)
    {
        $items = Company::where('slug',$slug)->where('id',$id)->first();
        return $items;
    }
    public function paginate()
    {
        return Company::orderby('pos_number')->paginate(8);
    }

    public function getAlbom(){
        return Albom::all()->pluck('name','id');
    }

    public function getSortingModel()
    {
        return Company::all()->sortBy('pos_number');
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
        $items = Company::create([
            'slug'=>Str::slug($request->company,'-'),
            'company' =>$request->company,
            'contents' =>$this->getFormTranslations('contents',$request),
            'contacttext' => $this->getFormTranslations('contacttext',$request),
            'phone' => $request->phone,
            'shortphone' => $request->shortphone,
            'pos_number' => $request->pos_number,
            'albom_id' => $request->albom_id,
            'mobphone' => $request->mobphone,
            'mobphone2' => $request->mobphone2,
            'address' => $request->address,
            'email' => $request->email,
            'email2' => $request->email2,
            'fb' => $request->fb,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'pdf' => $this->uploadFile($request->pdf,'files'),
            'img1' => $this->uploadImage($request->img1,"photos"),
            'img2' => $this->uploadImage($request->img2,"photos"),
            'logo' => $this->uploadImage($request->logo,"logos"),

        ]);

        if($items){
            return $items;
        }else{
            abort(404);
        }

    }

    public function update($request)
    {
        $item = cache('modCompEdit');
        if($request->pos_number != $item->pos_number){
            $this->getFilteringModel($request,$item->pos_number);
        }
        $item->update([
            'slug'=>Str::slug($request->company,'-'),
            'company' =>$request->company,
            'contents' =>$this->getFormTranslations('contents',$request),
            'contacttext' => $this->getFormTranslations('contacttext',$request),
            'phone' => $request->phone,
            'shortphone' => $request->shortphone,
            'mobphone' => $request->mobphone,
            'mobphone2' => $request->mobphone2,
            'pos_number' => $request->pos_number,
            'albom_id' => $request->albom_id,
            'address' => $request->address,
            'email' => $request->email,
            'email2' => $request->email2,
            'fb' => $request->fb,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'pdf' => $this->editFile($request->pdf,$item->pdf,$request->oldpdf,'files'),
            'img1' => $this->editImage($request->img1,$item->img1,$request->old_img1,"photos"),
            'img2' => $this->editImage($request->img2,$item->img2,$request->old_img2,"photos"),
            'logo' => $this->editImage($request->logo,$item->logo,$request->old_logo,"logos"),
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
            $data = cache('compmod');
            $deleted_item = $data->where('id',$item)->first();
            $poss = $deleted_item->pos_number;
            $this->filterAfterDestroying($poss);
            $filename1 = $deleted_item->img1;
            $filename2 = $deleted_item->img2;
            $logo = $deleted_item->logo;
            $pos = '/storage/photos/';
            $pos2 = '/storage/logos/';
            $filename1 = str_replace($pos, '', $filename1);
            $filename2 = str_replace($pos, '', $filename2);
            $logo = str_replace($pos2, '', $logo);
            $filepdf = $deleted_item->pdf;
            $deleted_item->delete();
            if($deleted_item){
                if($filename1 || $filename2)
                    $this->deleteImage($filename1,'photos');
                    $this->deleteImage($filename2,'photos');
                    $this->deleteImage($logo,'logos');
                    $this->deleteFile($filepdf,'files');
            }
        }
    }
}
