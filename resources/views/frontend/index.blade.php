@extends('frontend.layouts.master')

@section('main')
    @include('frontend.components.hero')

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $product )
                <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="{{ $product->image }}" alt="{{ $product->title }}">

                        <div class="card-body">
                            <h3 class="card-text">
                                <a href="">{{ $product->title }}</a>
                            </h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Add To cart</button>
                                </div>
                                <strong class="text-muted">BDT {{ $product->price }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="p-5">
                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection
