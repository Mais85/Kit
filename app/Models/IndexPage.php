<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class IndexPage extends Model
{
     use HasTranslations;

    protected $table = 'index_pages';
    protected $fillable = ['title1','title2','contents1','contents2','slug','img2','img1'];
    public $translatable= ['title1','title2','contents1','contents2'];
}
