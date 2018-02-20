@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Checkout</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('checkout') }}" id="cheackout-form">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="card-name" class="col-md-4 control-label">Card holder name</label>
    
                            <div class="col-md-6">
                                <input id="card-name" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="card-number" class="col-md-4 control-label">Credit card number</label>
        
                            <div class="col-md-6">
                                <input id="card-number" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="card-expity-month" class="col-md-4 control-label">Expiration month</label>
                            <div class="col-md-6">
                                <input id="card-expity-month" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="card-expity-year" class="col-md-4 control-label">Expiration Year</label>
                            <div class="col-md-6">
                                <input id="card-expity-year" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="card-cvc" class="col-md-4 control-label">CVC</label>
                            <div class="col-md-6">
                                <input id="card-cvc" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-lg-12">*Not implemented yet*</div>
    </div>
@endsection