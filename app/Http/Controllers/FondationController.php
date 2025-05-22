<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FondationController extends Controller
{
    public function index() {
        return view('fondation.index');
    }

    public function page($slug) {
        return view('fondation.page');
    }
}
