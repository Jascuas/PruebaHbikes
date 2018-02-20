<nav class="navbar navbar-default">
    <div class="container">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">Hbikes</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="{{ route('pages.index') }}"><span class="fa fa-home"></span> Home</a></li>
                <li><a href="{{ route('product.index') }}"><span class="fa fa-bicycle"></span> Store</a></li>
                <li><a href="{{ route('pages.gallery') }}"><span class="fa fa-camera"></span> Gallery</a></li>
                <li><a href="{{ route('pages.about') }}"><span class="fa fa-address-card"></span> Team</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('product.shoppingCart') }}"><span class="fa fa-shopping-cart"></span> Shopping cart <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span> User management <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    @if(Auth::check())
                    <li><a href="{{ route('home') }}">Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('users.logout') }}">Log out</a></li>
                    @else
                    <li><a href="{{ route('register') }}">Sign up</a></li>
                    <li><a href="{{ route('login') }}">Sign in</a></li>
                    @endif
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
    </div>
  </nav>