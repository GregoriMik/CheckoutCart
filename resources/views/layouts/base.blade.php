<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    @livewireStyles
    <title>Shop</title>
  </head>
  <body>
    {{-- <h1>Hello, world!</h1> --}}
    <header>
        <ul class="nav justify-content-center">
            {{-- <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/shop">Shop</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/cart">Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/checkout">Checkout</a>
            </li>
            <li disabled class="nav-item">
                <a class="nav-link" href="/checkout">Confirm</a>
            </li> --}}
            @if (Route::has('login'))
									@auth
										@if(Auth::user()->utype === 'ADM')
											{{-- //ADMIN --}}
                                            <ul class="nav justify-content-center">
											    <li class="nav-item" >
												<a class="nav-link" title="My Account" >
                                                    <li class="nav-item">
                                                        {{Auth::user()->name}}
                                                    </li>
                                                </a>
												
													<li class="nav-item">
														<a class="nav-link" title="Dashboard" href="{{ route('admin.dashboard')}}">Dashboard</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
													</li>
													<form id="logout-form" action="{{ route('logout') }}" method="post">
														@csrf
														
													</form>

                                                    <li class="nav-item">
                                                    <a class="nav-link" href="/shop">Shop</a>
                                                    </li>
                                                    <li class="nav-item">
                                                    <a class="nav-link" href="/cart">Cart</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/checkout">Checkout</a>
                                                    </li>
                                                    <li disabled class="nav-item">
                                                        <a class="nav-link" href="/checkout">Confirm</a>
                                                    </li> 				
                                            </ul>
										@else
										{{-- // --}}
                                        <ul class="nav justify-content-center">
                                            <li class="nav-item" >
                                            <a class="nav-link" title="My Account" >
                                                <li class="nav-item">
                                                    {{Auth::user()->name}}
                                                </li>
                                            </a>
                                            
                                                <li class="nav-item">
                                                    <a class="nav-link" title="Dashboard" href="{{ route('user.dashboard')}}">Dashboard</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="post">
                                                    @csrf
                                                    
                                                </form>

                                                <li class="nav-item">
                                                <a class="nav-link" href="/shop">Shop</a>
                                                </li>
                                                <li class="nav-item">
                                                <a class="nav-link" href="/cart">Cart</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/checkout">Checkout</a>
                                                </li>
                                                <li disabled class="nav-item">
                                                    <a class="nav-link" href="/checkout">Confirm</a>
                                                </li> 				
                                        </ul>
										@endif
                @else
                        <li class="nav-item">
                            <a class="nav-link"title="Register or Login" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"title="Register or Login" href="{{ route('register') }}">Register</a>
                        </li>
                @endif
            @endif
        </ul>
    </header>
    <main id="main">
        {{$slot}}
    </main>
    <!-- Optional JavaScript -->	
    <script src="{{ asset('assets/js/delivery.js') }}"></script>
    <script src="{{ asset('assets/js/eye.js') }}"></script>
    <script src="{{ asset('assets/js/otherAddress.js') }}"></script>
    <script src="{{ asset('assets/js/rbtC.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous') }}"></script>
    @livewireScripts
  </body>
</html>