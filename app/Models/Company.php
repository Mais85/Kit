<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Company extends Model
{
    use HasTranslations;

    protected $table = 'companies';
    protected $fillable = ['company','img1','img2','pdf','phone','mobphone','address','contacttext','fb','twitter','instagram','youtube','contents','slug'];
    protected $translatable = ['company','contenttext','contents'];
}
