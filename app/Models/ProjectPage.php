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

  public function getTranslation(string $key, string $locale, bool $useFallbackLocale = false)
  {
      $locale = $this->normalizeLocale($key, $locale, $useFallbackLocale);

      $translations = $this->getTranslations($key);

      $translation = $translations[$locale] ?? '';

      if ($this->hasGetMutator($key)) {
          return $this->mutateAttribute($key, $translation);
      }

      return $translation;
  }
}
