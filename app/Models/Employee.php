<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Str;

class Employee extends Model
{
    use HasTranslations;
    protected $table = 'employees';
    protected $fillable = ['name','surname','position','company','img','mobphone','phone','email','fb','twitter','instagram','linkedin','slug'];
    public $translatable = ['position','company'];

    public function setNameAttribute($name)
    {
        return $this->attributes['name'] = ucfirst($name);
    }

    public function setSurnameAttribute($surname)
    {
        return $this->attributes['surname'] = ucfirst($surname);
    }

    public function setSlugAttribute($slug)
    {
        return $this->attributes['slug'] = $slug.'-'.time();
    }
}
