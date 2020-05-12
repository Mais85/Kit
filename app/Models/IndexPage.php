<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class IndexPage extends Model
{
     use HasTranslations;

    protected $table = 'index_pages';
    protected $fillable = ['title1','title2','contents1','contents2','slug','img1','img2','img3','img4','img5','img6','video','head_title'];
    public $translatable= ['title1','title2','contents1','contents2','head_title'];
}
