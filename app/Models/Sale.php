<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $fillable = [
        'order',
        'title',
        'sub_title',
        'description',
        'img',
    ];
}
