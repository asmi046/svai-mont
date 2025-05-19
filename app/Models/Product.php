<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = [
        'title',
        'order',
        'img',
        'top_description',
        'description',
        'price'
    ];

    protected $casts = [
        'price' => 'array',
    ];
}
