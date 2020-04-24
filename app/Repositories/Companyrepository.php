<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\Companycreaterequest;
use App\Models\Company;
use Illuminate\Support\Str;

class Companyrepository extends AdminBaseController
{
    public  function all()
    {
        return Company::all();
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

    public function paginate()
    {
        return Company::paginate(8);
    }


    public function store($request)
    {
        $items = Company::create([
            'slug'=>Str::slug($request->company,'-'),
            'company' =>$request->company,
            'contents' =>$this->getFormTranslations('contents',$request),
            'contacttext' => $this->getFormTranslations('contacttext',$request),
            'phone' => $request->phone,
            'mobphone' => $request->mobphone,
            'address' => $request->address,
            'email' => $request->email,
            'fb' => $request->fb,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'pdf' => $this->uploadFile($request->pdf,'files'),
            'img1' => $this->uploadImage($request->img1,"photos"),
            'img2' => $this->uploadImage($request->img2,"photos"),

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
        $item->update([
            'slug'=>Str::slug($request->company,'-'),
            'company' =>$request->company,
            'contents' =>$this->getFormTranslations('contents',$request),
            'contacttext' => $this->getFormTranslations('contacttext',$request),
            'phone' => $request->phone,
            'mobphone' => $request->mobphone,
            'address' => $request->address,
            'email' => $request->email,
            'fb' => $request->fb,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'pdf' => $this->editFile($request->pdf,$item->pdf,$request->oldpdf,'files'),
            'img1' => $this->editImage($request->img1,$item->img1,$request->old_img1,"photos"),
            'img2' => $this->editImage($request->img2,$item->img2,$request->old_img2,"photos"),
        ]);
    }

    public function destroy($id)
    {
        $items = array_filter(explode(',',$id));
        foreach ($items as $item) {
            $data = cache('compmod');
            $deleted_item = $data->where('id',$item)->first();
            $filename1 = $deleted_item->img1;
            $filename2 = $deleted_item->img2;
            $pos = '/storage/photos/';
            $filename1 = str_replace($pos, '', $filename1);
            $filename2 = str_replace($pos, '', $filename2);
            $filepdf = $deleted_item->pdf;
            $deleted_item->delete();
            if($deleted_item){
                if($filename1 || $filename2)
                    $this->deleteImage($filename1);
                    $this->deleteImage($filename2);
                    $this->deleteFile($filepdf,'files');
            }
        }
    }
}
