<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return $products;
    }

    public function detail($slug) {
        $product = Product::where('slug', $slug);
        return view('products.detail', ['product' => $product]);
    }
}
