<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasTranslations;

    protected $table = 'projects';
    protected $guarded = [];
    protected $dates = ['projectdate'];
    public $translatable = ['title1','title2','title3','title4','title5','title6','catname','desc','contents1',
                            'contents2','info1','info2','info3','info4','info5','info6'];
}
