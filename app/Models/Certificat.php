<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificat extends Model
{
    protected $fillable = [
        'order',
        'title',
        'img',
    ];
}
