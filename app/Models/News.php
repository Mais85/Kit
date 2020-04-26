<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    use HasTranslations;
    protected $table = 'news';
    protected $fillable = ['title','desc','img','smallimg','isPublished','contents','slug'];
    public $translatable = ['title','desc','contents','slug'];
}
