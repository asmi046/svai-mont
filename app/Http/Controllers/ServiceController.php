<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $services = Service::all();
        return view('service.index', ['services'=> $services]);
    }

    public function page($slug) {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('service.page', ['service' => $service]);
    }
}
