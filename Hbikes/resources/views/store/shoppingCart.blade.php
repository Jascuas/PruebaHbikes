@extends('layouts.app')
@section('content')
<h1 class="text-center">Your shopping Cart</h1>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <table class="table">
                    <thead class="blue-grey lighten-4">
                        <tr>
                            <th>Quantity</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($products)
                        @foreach($products as $product)
                            @if($product['qty'] > 0)
                                <tr>
                                    <td><span class="badge">{{ $product['qty'] }}</span></td>
                                    <td><strong>{{ $product['item']['name'] }}</strong></td>
                                    <td><span class="label label-success">{{ $product['price'] }}</span></td>
                                </tr>
                            @endif
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        @if($products)
        <div class="row text-center">
            <div class="col-lg-4 col-lg-offset-4">
                    <strong>Total: {{ $totalPrice }}</strong>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-6 col-lg-offset-3">
                <a href="{{ route('checkout')}}" type="button" class="btn btn-outline-primary">Checkout</a>
                <a href="{{ route('product.deleteCart')}}" type="button" class="btn btn-outline-danger">Delete cart</a>
            </div>
        </div>
        @endif
@endsection