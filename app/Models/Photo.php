<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    protected $fillable = ['img','albom_id','user_id'];

    public function albom()
    {
        return $this->belongsTo(Albom::class);
    }

}
