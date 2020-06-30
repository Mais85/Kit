<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasTranslations;
    protected $fillable = ['title','meta_description','meta_keywords','footcontent','logo','address','email' ,'email2','phone','mobphone','mobphone2' ,'shortphone','fb','linkedin','instagram','youtube'];
    public $translatable = ['meta_description','meta_keywords','footcontent'];
}
