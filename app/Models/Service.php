<?php

namespace App\Models;

use App\Traits\LastMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Service extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia, LastMedia;


//    public function getRouteKeyName()
//    {
//        return 'uuid';
//    }

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class,'service_category_id');
    }

    public function providers()
    {
        return $this->belongsToMany(Provider::class,'provider_services');
    }
}
