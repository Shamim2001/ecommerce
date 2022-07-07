<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller {
    public function index() {
        $categories = Category::select( ['name', 'slug'] )->get();
        $products = Product::select( 'id', 'title', 'slug', 'image', 'price', 'sale_price' )->where( 'active', 1 )->paginate( 9 );


        return view( 'frontend.index' )->with( [
            'products'   => $products,
            'categories' => $categories,
        ] );
    }
}
