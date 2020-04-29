<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{
    use HasTranslations;

    protected $table = 'testimonials';
    protected $fillable = ['username','position','img','company','contents','slug','facebook','instagram','twitter','linkedin'];
    public $translatable =['position','contents'];

    public function setUsernameAttribute($username)
    {
        $this->attributes['username'] = ucwords(mb_strtolower($username));
    }

    public function setCompanyAttribute($company)
    {
        $this->attributes['company'] = ucwords(mb_strtolower($company));
    }
}
