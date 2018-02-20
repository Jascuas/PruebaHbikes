@extends('layouts.app')
@section('content')
<!--Section: Products v.3-->
<section class="text-center pb-3">
    <div class="row text-left">
        <ol class="font-up breadcrumb transparent">
            <li class="breadcrumb-item"><a class="black-text h4" href="{{ route('product.index') }}">Store</a></li>
        </ol>
    </div>
    <!--Section heading-->
    @foreach($products->chunk(4) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
<!--Grid column-->
<div class="col-lg-3 col-md-6 mb-r">

        <!--Card-->
        <div class="card align-items-center">

            <!--Card image-->
            <div class="view overlay hm-white-slight">
                <img src="{{ $product->imagePath }}" class="img-fluid" alt="Imagen del producto: {{ $product->name }}">
                <a>
                    <div class="mask"></div>
                </a>
            </div>
            <!--Card image-->

            <!--Card content-->
            <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                    <h5>{{ $product->type }}</h5>
                </a>
                <h5>
                    <strong>
                        <a href="{{ route('product.getItem',['id' => $product->id]) }}" class="dark-grey-text">{{ $product->name }}</a>
                    </strong>
                </h5>

                <h4 class="font-bold blue-text">
                    <strong>{{ $product->price }}$</strong>
                </h4>
                <a href="{{ route('product.addToCart',['id' => $product->id]) }}" role="button" class="btn btn-outline-primary waves-effect">Add to cart</a>
            </div>
            <!--Card content-->

        </div>
        <!--Card-->

    </div>
    <!--Grid column-->
        @endforeach
    </div>
    <!--Grid row-->
    @endforeach
    {{ $products->links() }}
</section>
<!--Section: Products v.3-->   
@endsection