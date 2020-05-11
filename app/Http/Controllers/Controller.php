<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Setting;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     *  language
     * @var array
     */
    public $__languages = [
        'az' => ["Azərbaycanca","AZE"],
        'en' => ["English","ENG"],
        'ru' => ["Русский","RUS"]
    ];


    public $__thumbs = [
        'thumb_p'       => [200,200], //product
        //'thumb_phome' => [300,226], //product_home
        //'thumb_s'     => [300,420], //slide
        //'thumb_u'       => [300,300] //user
    ];

    public function  __construct()
    {
        //Load All Helper Files without using composer
        Statics\Helper::Load();

        //View Global Variables
        view()->share([
            "__languages"   => $this->__languages,
            "__thumbs"      => $this->__thumbs,
            "__settings"      => Setting::findOrFail(1)
        ]);
    }

    public function check($model,$error,$old_cached = null){
        if(!$model){
            abort($error);
        }
        if($old_cached){
            foreach ($old_cached as $key => $value) {
                Cache::forget($value);
            }
        }
    }
}
