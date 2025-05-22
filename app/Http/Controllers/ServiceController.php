<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        return view('service.index');
    }

    public function page($slug) {
        return view('service.page');
    }
}
