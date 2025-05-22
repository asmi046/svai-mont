<?php

namespace App\Http\Controllers;

use App\Models\Certificat;
use Illuminate\Http\Request;

class CertificatController extends Controller
{
    public function index() {
        $certificates = Certificat::all();
        return view('certificat', ['certificates' => $certificates]);
    }
}
