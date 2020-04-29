<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Referance extends Model
{
    use HasTranslations;

    protected $table = 'referances';
    protected $fillable = ['title', 'img', 'desc', 'slug'];
    public $translatable = ['desc'];

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = ucfirst($title);
    }
}
