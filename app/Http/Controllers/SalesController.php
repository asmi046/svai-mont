<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index() {
        $sales = Sale::orderBy('order', 'asc')->get();
        return view('sales', ['sales' => $sales]);
    }
}
