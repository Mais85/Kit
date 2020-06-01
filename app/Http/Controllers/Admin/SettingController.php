<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\Settingrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Translatable\HasTranslations;
use App\Models\Setting;

class SettingController extends AdminBaseController
{
    use HasTranslations;

    /**
     * Site Global Settings
     *  @return \Illuminate\Http\Response
     */

    public function index()
    {
        $items = Setting::find(1);

        $title = "Nizamlamalar";
        return view("admin.setting.index",compact('items','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Settingrequest $request)
    {
        $bvalidated = $request->validated();

        if($bvalidated){

            $item = Setting::find(1);

            if(isset($item)){
                $items = $item->update([
                    'title' => $request->title,
                    'meta_description' => $this->getFormTranslations('meta_description',$request),
                    'meta_keywords' => $this->getFormTranslations('meta_keywords',$request),
                    'footcontent' => $this->getFormTranslations('footcontent',$request),
                    'logo' => $this->editImage($request->logo,$item->logo,$request->old_logo,'photos'),
                    'phone' => $request->phone,
                    'mobphone' => $request->mobphone,
                    'address' => $request->address,
                    'email' => $request->email,
                    'fb' => $request->fb,
                    'twitter' => $request->twitter,
                    'instagram' => $request->instagram,
                    'youtube' => $request->youtube,
                ]);

            }else{

                $items = Setting::create([
                    'title' => $request->title,
                    'meta_description' => $this->getFormTranslations('meta_description',$request),
                    'meta_keywords' => $this->getFormTranslations('meta_keywords',$request),
                    'footcontent' => $this->getFormTranslations('footcontent',$request),
                    'logo' => $this->uploadImage($request->logo,'photos'),
                    'phone' => $request->phone,
                    'mobphone' => $request->mobphone,
                    'address' => $request->address,
                    'email' => $request->email,
                    'fb' => $request->fb,
                    'twitter' => $request->twitter,
                    'instagram' => $request->instagram,
                    'youtube' => $request->youtube,
                ]);
            }
            // $this->check($item,500);
            return redirect('/admin/setting/')->with('message','Yenilənmə əməliyyatı uğurla başa çatdı.');
        }else{
            return redirect()->back()->withErrors($bvalidated)->withInput();
        }

    }
}
