<?php

namespace App\Models;

use App\Traits\LastMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class ProviderType extends Model implements HasMedia
{
    use HasFactory, HasSlug;
    use InteractsWithMedia, LastMedia;

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function providers()
    {
      return  $this->hasMany(Provider::class);
    }
}
