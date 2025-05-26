<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index() {
        $galery = Galery::all();
        return view('galery', ['galery' => $galery]);
    }
}
