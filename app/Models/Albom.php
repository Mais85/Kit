<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Albom extends Model
{
    protected $table = 'alboms';
    protected $fillable = ['name','coverimg','isPublished','slug'];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
