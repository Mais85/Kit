<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Spatie\Translatable\HasTranslations;
use Carbon\Carbon;

class Project extends Model
{
    use HasTranslations;

    protected $table = 'projects';
    protected $guarded = [];
    public $translatable = ['title1','title2','catname','desc','contents1',
                            'contents2','slug'];

    public function getProjectdateAttribute($projectdate)
    {
            $date = Carbon::parse($projectdate)->format('d/m/Y');
            return $date;
    }
}
