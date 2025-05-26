<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index() {
        $product = Product::all();
        $product_table = [];

        foreach ($product as $item)
            $product_table[$item->title] = [
                'table' => $item->price,
                'lnk' => route('product_page', $item->slug),
            ];


        return view('price', ['prices' => $product_table]);
    }
}
