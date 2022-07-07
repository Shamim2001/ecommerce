@extends('frontend.layouts.master')

@section('main')
    <div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
        <div class="container">
            <div class="breadcrumb-content text-center" style="background-color: #f2f2f2; padding: 30px 0">
                <ul class="d-flex justify-content-center">
                    <li><a href="{{ route('frontend.index') }}" class="mx-3 text-decoration-none">Home /</a></li>
                    <li class="active"  class="text-decoration-none">Shop Details </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area pt-100 pb-100 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="tab-content jump">
                        <img width="100%" src="{{ $product->image }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-content ml-5">
                        <h2>{{ $product->title }}</h2>
                        <div class="product-details-price">
                            <span>BDT {{ $product->price }}</span>
                            <span class="old">BDT Old Price </span>
                        </div>

                        <p>{{ $product->description }}</p>


                        <div class="pro-details-quality">

                            <div class="pro-details-cart btn-hover">
                                <a href="#">Add To Cart</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
