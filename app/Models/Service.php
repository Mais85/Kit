<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    Use HasTranslations;

    protected $table = 'services';
    protected $fillable = ['title','contents','slug','img1','img2','company_id','company_name'];
    public $translatable = ['title','contents','slug'];

}
