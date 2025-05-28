<?php

namespace App\Http\Controllers;

use App\Models\Fondation;
use Illuminate\Http\Request;

class FondationController extends Controller
{
    public function index() {
        $fondations = Fondation::all();
        return view('fondation.index', ['fondations'=> $fondations]);
    }

    public function page($slug) {
        $fondation = Fondation::where('slug', $slug)->firstOrFail();
        return view('fondation.page', ['fondation' => $fondation]);
    }
}
