<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fondation extends Model
{
    public $fillable = [
        'title',
        'slug',
        'short_title',
        'order',
        'img',
        'icon',
        'top_description',
        'description',
        'price'
    ];

    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }
}
