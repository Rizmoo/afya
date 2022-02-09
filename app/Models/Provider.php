<?php

namespace App\Models;

use App\Traits\LastMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Provider extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia, LastMedia;

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($provider) {
            $provider ->uuid = Str::uuid();
        });
    }
    public function type()
    {
        return $this->belongsTo(ProviderType::class,'provider_type_id');
    }


    public function services()
    {
        return $this->hasMany(ProviderService::class);
    }


    /**
     * Get the URL to the user's profile photo.
     *
     * @return string
     */
    public function getPhotoAttribute()
    {
        return $this->profile_photo_path
            ? Storage::disk('public')->url($this->logo)
            : $this->unsplash();
    }

    public function unsplash()
    {
        $ima = Http::get('https://api.unsplash.com/photos/random?client_id=0f37bbb92230ea13d31a606c51944e796d97251d55d0f66a2d697d162d2ea6a6');
        return $ima->json()['urls']['regular'];
    }
}

