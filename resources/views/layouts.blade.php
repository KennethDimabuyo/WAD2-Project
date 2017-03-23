<!DOCTYPE html>
<html>
<head>
	<title>Nekko Shop</title>
	<link rel="stylesheet" type="text/css" href=" {{ asset('/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('/css/design.css') }} ">
</head>
<body>

	<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
       	<div class="navbar-header">
       		@yield('head')
        </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/home/sell') }}">Sell</a>
                        <a href="{{ url('/logout') }}">Log out</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
		  </div>
    </nav>

    <div class="wrapper">
        @yield('body1')
    </div>
    <div class="container">
    	@yield('body')
    </div>

<script type="text/javascript" src=" {{ asset('/js/bootstrap.min.js') }} "></script>
</body>
</html>