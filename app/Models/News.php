<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    use HasTranslations;
    protected $table = 'news';
    protected $fillable = ['title','desc','img','smallimg','isPublished','contents','slug','albom_id'];
    public $translatable = ['title','desc','contents','slug'];

    public function getCreatedAtAttribute($created_at)
    {
        $date = Carbon::parse($created_at)->format('d-M-Y');
        return $date;
    }
}
