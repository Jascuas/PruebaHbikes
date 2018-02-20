@extends('layouts.app')
@section('content')
<section class="row">
    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4">
    <!--Register form-->
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('users.signin') }}" method="post">
        <h1>Sign in</h1>
    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="text" id="email" name="email" class="form-control" mdbActive>
        <label for="email">Your email</label>
    </div>

    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" id="password" name="password" class="form-control" mdbActive>
        <label for="password">Your password</label>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-deep-orange waves-light" >Sign up</button>
        {{ csrf_field() }}
    </div>
</form>
<!--/Register form-->
</section>
@endsection