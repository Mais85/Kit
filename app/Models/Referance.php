<?php

namespace App\Models;

use Carbon\Carbon;
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
        $this->attributes['referancer'] = ucwords($referancer);
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = ucwords(strtolower($name));
    }

    public function getRefDateAttribute($ref_date)
    {
        $date = Carbon::parse($ref_date)->format('d/m/Y');
        return $date;
    }
}
