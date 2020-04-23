<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Employee extends Model
{
    use HasTranslations;
    protected $table = 'employees';
    protected $fillable = ['name','surname','position','company','img','phone','email','fb','twitter','instagram','linkedin','slug'];
    public $translatable = ['position','company'];
}
