<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class City extends Model
{
    public $fillable = [
        'name',
        'slug',
        'order',
        'rp',
        'pp',
        'dp',
    ];

    protected static function booted(): void
    {
        static::created(function ($item) {
            Cache::forget('all_city_in_site');
        });

        static::deleted(function ($item) {
            Cache::forget('all_city_in_site');
        });
    }

    public static function allFromCache(): Collection
    {
        return Cache::rememberForever('all_city_in_site', function () {
            return self::query()->get();
        });
    }


    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->name);
        else
            $this->attributes['slug'] =  $value;
    }
}
