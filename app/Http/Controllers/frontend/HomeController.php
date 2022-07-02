<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::select('id','title', 'slug', 'image', 'sale_price')->where('active', 1)->paginate(9);

        return view('frontend.index')->with('products', $products);
    }
}
