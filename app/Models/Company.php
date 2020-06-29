<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Company extends Model
{
    use HasTranslations;

    protected $table = 'companies';
    protected $fillable = ['company','img1','img2','pdf','email','phone','mobphone','address','contacttext','fb','linkedin','instagram','youtube','contents','slug','albom_id','logo'];
    protected $translatable = ['contacttext','contents'];
}
