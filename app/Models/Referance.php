<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Referance extends Model
{
    use HasTranslations;

    protected $table = 'referances';
    protected $fillable = ['referancer', 'img', 'position','ref_date','name','company_id','slug'];
    public $translatable = ['position'];

    public function setReferancerAttribute($referancer)
    {
        $this->attributes['referancer'] = ucfirst($referancer);
    }
}
