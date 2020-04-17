<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasTranslations;
    protected $fillable = ['title','meta_description','meta_keywords','footcontent','logo','address','email','phone','mobphone','fb','twitter','instagram','youtube','yandexMetrix','googleMetrix'];
    public $translatable = ['title','meta_description','meta_keywords','footcontent'];
}
