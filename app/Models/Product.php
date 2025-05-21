<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = [
        'title',
        'slug',
        'order',
        'img',
        'top_description',
        'description',
        'price'
    ];
}
