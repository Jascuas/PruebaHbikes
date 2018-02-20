@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#orders">Orders</a></li>
                            <li><a data-toggle="tab" href="#reviews">Reviews</a></li>
                          </ul>
                          
                          <div class="tab-content">
                            <div id="orders" class="tab-pane fade in active">
                                <h2>Orders</h2>
                                <p class="well">
                                    This is your first order
                                </p>
                            </div>
                            <div id="reviews" class="tab-pane fade">
                                <h2>Reviews</h2>
                                @if(count($reviews) > 0)
                                    @foreach($reviews as $review)
                                        <h3>{{ $review->title }} -> {{ $review->product_name }}</h3>
                                        <div class="well">
                                            {{ $review->body }}
                                        </div>
                                    @endforeach
                                @else
                                    <div class="well">
                                        No reviews
                                    </div>
                                @endif
                            </div>
                          </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
