<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
        public $fillable = [
        'title',
        'sub_title',
        'order',
        'img',
        'top_description',
        'description',
        'price'
    ];
}
