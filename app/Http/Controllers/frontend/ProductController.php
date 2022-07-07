<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    // Single product show
    public function show( $slug ) {
        $product = Product::where( 'slug', $slug )->where( 'active', 1 )->first();
        $categories = Category::select( ['name', 'slug'] )->get();

        if ( $product === null ) {
            return redirect()->route( 'frontend.index' );
        }

        return view( 'frontend.product.show' )->with( [
            'product'    => $product,
            'categories' => $categories,
        ] );
    }

    // Add To Card function
    public function addToCart( Request $request ) {

        $request->validate( [
            'product_id' => ['required' | 'numeric'],
        ] );

        $product = Product::find( $request->id );
        $cart = session()->has( 'cart' ) ? session()->get( 'cart' ) : [];

        if ( array_key_exists( $product->id, $cart ) ) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'title'    => $product->title,
                'quantity' => 1,
                'price'    => ( $product->sale_price === !null && $product->sale_price > 0 ) ? $product->sale_price : $product->price,
            ];
        }

        session( ['cart' => $cart] );
        session()->flash( 'message', 'This Product Added' );

        return redirect()->route( 'cart.view' );
    }

    // Card view
    public function viewCart() {
        $categories = Category::select( ['name', 'slug'] )->get();
        $cart = session()->has( 'cart' ) ? session()->get( 'cart' ) : [];

        $total = array_sum(array_column($cart, 'price'));

        return view('frontend.product.cart')->with([
            'cart' => $cart,
            'total' =>$total,
            'categories' => $categories
        ]);
    }

}
