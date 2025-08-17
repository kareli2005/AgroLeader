<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;

class HomeController extends Controller
{
    public function index()
    {
        $sliderProducts = Product::with('images')->take(5)->get();
        $products = Product::with('images', 'category')->paginate(12);
        $categories = Category::where('status', 1)->get();
        return view('home', compact('sliderProducts', 'products', 'categories'));
    }
}
