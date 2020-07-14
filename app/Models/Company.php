<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Company extends Model
{
    use HasTranslations;

    protected $table = 'companies';
    protected $fillable = ['company','img1','img2','pdf','email','email2','phone','pos_number','shortphone','mobphone','mobphone2','address','contacttext','fb','linkedin','instagram','youtube','contents','slug','albom_id','logo'];
    protected $translatable = ['contacttext','contents'];
}
