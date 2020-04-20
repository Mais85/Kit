<?php


namespace App\Repositories;


use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Company;
use Illuminate\Support\Str;

class Companyrepository extends AdminBaseController
{
    public  function all()
    {
        return Company::all();
    }

    public function paginate()
    {
        return Company::paginate(8);
    }

    public function store($request)
    {
        $items = Company::create([
            //'slug'=> Str::slug('main page edit','-'),
            'company' =>$this->getFormTranslations('company',$request),
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
            //'pdf' => $this->uploadFile(),
            'img1' => $this->uploadImage($request->img1,"photos"),
            'img2' => $this->uploadImage($request->img2,"photos"),

        ]);
        if($items){
            return $items;
        }else{
            abort(404);
        }

    }
}
