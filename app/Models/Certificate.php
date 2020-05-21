<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Certificate extends Model
{
    use HasTranslations;

    protected $table = 'certificates';
    protected $fillable = ['title', 'img', 'desc', 'slug'];
    public $translatable = ['desc'];

    public function setTitleAttribute($title)
    {
        $strlen = mb_strlen($title);
        $firstChar = mb_substr($title, 0, 1);
        $then = mb_substr(mb_strtolower($title), 1, $strlen - 1);
        $word =  mb_strtoupper($firstChar) . $then;
        return $this->attributes['title'] = $word;
    }
}
