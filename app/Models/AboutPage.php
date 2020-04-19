<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutPage extends Model
{
    use HasTranslations;

    protected $table = 'about_pages';
    protected $fillable = ['title1','title2','title3','content1','content2','content3','desc1','desc2','desc3','desc4','smtxt1','smtxt2','smtxt3','smtxt4','img','slug'];
    public $translatable = ['title1','title2','title3','content1','content2','content3','desc1','desc2','desc3','desc4','smtxt1','smtxt2','smtxt3','smtxt4'];
}
