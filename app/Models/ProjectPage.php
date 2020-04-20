<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProjectPage extends Model
{
    use HasTranslations;

    protected $table = 'project_pages';
    protected $fillable = ['contents','slug'];
    public $translatable = ['contents'];
}
