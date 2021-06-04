<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
    @livewireStyles
    <script src="https://unpkg.com/react@17/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
  </head>
  <body>
    <header>
        {{-- <ul class="nav justify-content-center"> --}}
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
        {{-- </ul> --}}
            @if (Route::has('login'))
									@auth
										@if(Auth::user()->utype === 'ADM')
											{{-- //ADMIN --}}
                                            <ul class="nav justify-content-center">
											    <li class="nav-item" >
												<a class="nav-link" title="My Account" >({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												{{-- <ul class="submenu curency" > --}}
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
                                                    </li> 				
												{{-- </ul> --}}
											    </li>
                                            </ul>
										@else
										{{-- // --}}
											<li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">My Account ({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="{{ route('user.dashboard')}}">Dashboard</a>
													</li>
													<li class="menu-item">
														<a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
													</li>
													<form id="logout-form" action="{{ route('logout') }}" method="post">
														@csrf
														
													</form>	
                                                    <li class="nav-item">
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
                                                        </li> 												
												</ul>
											</li>
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
	<script src="{{ asset('assets/js/functions.js') }}"></script>
    <!-- Optional JavaScript -->
    <script src="{{ asset('assets/js/eye.js') }}"></script>
    <script src="{{ asset('assets/js/otherAddress.js') }}"></script>
    <script src="{{ asset('assets/js/rbtC.js') }}"></script>
    <script src="{{ asset('assets/js/delivery.js') }}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>