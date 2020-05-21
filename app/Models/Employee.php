<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Str;

class Employee extends Model
{
    use HasTranslations;
    protected $table = 'employees';
    protected $fillable = ['name','surname','position','company','img','mobphone','pos_number','phone','email','fb','twitter','instagram','linkedin','slug'];
    public $translatable = ['position'];

    public function setNameAttribute($name)
    {
        $strlen = mb_strlen($name);
        $firstChar = mb_substr($name, 0, 1);
        $then = mb_substr(mb_strtolower($name), 1, $strlen - 1);
        $word =  mb_strtoupper($firstChar) . $then;
        return $this->attributes['name'] = $word;
    }

    public function setSurnameAttribute($surname)
    {
        $strlen = mb_strlen($surname);
        $firstChar = mb_substr($surname, 0, 1);
        $then = mb_substr(mb_strtolower($surname), 1, $strlen - 1);
        $word =  mb_strtoupper($firstChar) . $then;
        return $this->attributes['surname'] = $word;
    }

    public function setSlugAttribute($slug)
    {
        return $this->attributes['slug'] = $slug.'-'.time();
    }
}
