<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    public $fillable = [
        'order',
        'title',
        'img',
    ];
}
