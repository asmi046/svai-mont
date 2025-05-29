<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class City extends Model
{
    public $fillable = [
        'name',
        'is_default',
        'slug',
        'order',
        'rp',
        'pp',
        'dp',
    ];

    public function getUrl(): string
    {
        Log::info(env('APP_URL'));
        Log::info($this->is_default);

         $lnk = Str::of(env('APP_URL'))
            ->when(!$this->is_default, function (Stringable $str) {
                return $str->replace(search: '//', replace: '//' . $this->slug . '.');
            })
            ->when(request()->path() !== '/', function (Stringable $str) {
                return $str->append(values: '/' . request()->path());
            })
            ->when(request()->getQueryString(), function (Stringable $str) {
                return $str->append(values: '?' . request()->getQueryString());
            });

            // if ($this->slug !== "surgut")
            //     dd($this->slug, $lnk, $this->is_default);
            Log::info($lnk);

            return $lnk;
    }

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
