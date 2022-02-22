<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('landing.index', compact('products'));
    }
}
