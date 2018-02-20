@extends('layouts.app')
@section('content')
    <div class="row">
        <ol class="font-up breadcrumb transparent">
                <li class="breadcrumb-item"><a class="black-text h4" href="{{ route('product.index') }}">Store</a></li>
                <li class="breadcrumb-item active"><a class="black-text h4" href="#">{{ $product->name }}</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="view col-lg-7">
            <img src="{{ $product->imagePath }}" class="img-fluid" alt="">
            <div class="mask"></div>
        </div>
        <div class="col-lg-5 text-center">
            <div class="card">
                <h3 class="card-header primary-color white-text">{{ $product->name }}</h3>
                <div class="card-body">
                    <h2 class="card-title"><span class="badge green"><h4>{{ $product->price }} $</h4></span></h2>
                    <a href="{{ route('product.addToCart',['id' => $product->id]) }}" role="button" class="btn btn-outline-primary waves-effect">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#features">Features</a></li>
                <li><a data-toggle="tab" href="#reviews">Reviews</a></li>
              </ul>
              
              <div class="tab-content">
                <div id="features" class="tab-pane fade in active">
                    <h2>Features</h2>
                    <p>
                        {{ $product->description }}
                    </p>
                    <p>
                        <ul>
                            <li><strong>Name:</strong> {{ $product->name }}</li>
                            <li><strong>Price:</strong> {{ $product->price }} $</li>
                            <li><strong>Type:</strong> {{ $product->type }}</li>
                            <li><strong>Weight:</strong> {{ $product->weight }} libs</li>
                            <li><strong>Color:</strong> {{ $product->color }}</li>
                        </ul>
                    </p>
                </div>
                <div id="reviews" class="tab-pane fade">
                    <h2>Reviews</h2>
                    @if(Auth::check())
                        {!! Form::open(['action' => 'ReviewController@store','method' => 'POST'])!!}
                        <div class="form-group">
                                {{Form::text('Product',$product->id,['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                                {{Form::text('Product_name',$product->name,['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('Title','Title')}}
                            {{Form::text('Title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('Body','Body')}}
                            {{Form::textarea('Body','',['id'=>'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body text'])}}
                        </div>
                        <div class="form-group text-center">
                            {{ Form::submit('Submit', ['class' => 'btn-primary btn']) }}
                        </div>
                        {!! Form::close() !!}
                    @else   
                        <h3>You must be loged in to review this item</h3>
                    @endif
                    <section>
                    @if(count($reviews) > 0)
                        @foreach($reviews as $review)
                            <article>
                                <h3>{{ $review->title }}</h3>
                                <div class="well">
                                    {{ $review->body }}
                                </div>
                            </article>
                            <hr>
                        @endforeach
                    @else
                    <div class="well">
                            Noone wrote a review about this product
                    </div>
                    @endif
                    <section>
                </div>
              </div>
        </div>
    </div>
@endsection