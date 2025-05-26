<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('product.index', ['products'=> $products]);
    }

    public function page($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product.page', ['product' => $product]);
    }
}
