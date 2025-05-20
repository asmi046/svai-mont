<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceVidget extends Model
{
    public $fillable = [
        'size',
        'order',
        'img',
        'price',
        'price_mont',
    ];
}
