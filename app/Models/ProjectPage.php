<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ProjectPage extends Model
{
    use HasTranslations;

    protected $table = 'project_pages';
    protected $fillable = ['content','slug'];
    public $translatable = ['content'];
}
