@extends('frontend.layouts.master')

@section('main')
    <div class="container">
        <table class="table border-borderd">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $cart)
                    <tr>
                        @php
                            $i = 1;
                        @endphp
                        <td>{{ $i++ }}</td>
                        <td>{{ $cart['title'] }}</td>
                        <td>
                            <input type="number" name="quantity" value="{{ $cart['quantity'] }}">
                        </td>
                        <td>{{ $cart['price'] }}</td>
                        <td>
                            <form action="">
                                <button type="submit" class="btn btn-danger font-size-sm">Delete</button>
                            </form>
                        </td>

                    </tr>

                @endforeach
                    <tr>
                        <th colspan="3" class="text-center font-bold">Total = </th>
                        <td>{{ $total }}</td>
                        <td></td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
