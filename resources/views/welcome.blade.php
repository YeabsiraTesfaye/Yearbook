<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
        <!-- Styles -->
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		


		<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('css/style.css')}}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
         <!-- <script href="{{asset('css/bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script> -->
    </head>
    <body>
    <!-- <nav class="navbar navbar-inverse sticky-top rounded-0">
 
        @if(Route::has('login'))
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/home">mYearbook.com</a>
            </div>
            @auth
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/home') }}">Home</a></li>
            </ul>
            <ul class='nav navbar-nav navbar-right'>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            </ul>
            
            @else
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                @if(Route::has('register'))
                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                @endif
            </ul>
            @endauth
        </div>
        @endif
    </nav> -->
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image:url(storage/pictures/a.jpg);">
      	    <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
	                    <div class="col-md-12 ftco-animate">
	          	            <div class="text w-100 text-center">
	          		            <h2>Life is full of</h2>
		                        <h1 class="mb-3">MEMORY</h1>
	                        </div>
	                    </div>
	                </div>
                </div>
            </div>

            <div class="slider-item js-fullheight" style="background-image:url(storage/pictures/b.jpg);">
      	        <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
	                        <div class="col-md-12 ftco-animate">
	          	                <div class="text w-100 text-center">
	          		                <h2>Life is full of</h2>
		                            <h1 class="mb-3">EXPERIANCE</h1>
	                            </div>
	                        </div>
	                    </div>
                    </div>
                </div>

                <div class="slider-item js-fullheight" style="background-image:url(storage/pictures/c.png);">
                    <div class="overlay"></div>
                        <div class="container">
                            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                                <div class="col-md-12 ftco-animate">
                                    <div class="text w-100 text-center">
                                        <h2>Life is full of</h2>
                                        <h1 class="mb-3">FRIENDSHIP</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item js-fullheight" style="background-image:url(storage/pictures/students.jpg);">
                    <div class="overlay"></div>
                        <div class="container">
                            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                                <div class="col-md-12 ftco-animate">
                                    <div class="text w-100 text-center">
                                        <h2>Life is full of</h2>
                                        <h1 class="mb-3">KNOWLEDGE</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron align-items-center text-center">
        <h2 style='font-size:40px'><strong>Welcome to MyYearbook.com</strong></h2>
        <p class='text-left'>
        MyYearbook.com website is made mainly for graduating students to help them make the process of making a yearbook faster and less time consuming. this website makes the yearbook making process easier by giving the role of choosing the design of the yearbook and also uploading the photos to the users. unlike the traditional way of making a yearbook this digital yearbook lets the students take their own pictures whenever they can and upload it in to their specific yearbook. it also lets the students export the digital yearbook into a file so that they can print it out incase they want a hard copy. click <strong><a href='#'>here</a></strong> if you want to see the user manual. 
        </p>
        <a href='/home' style='width:fit-content; height:fit-content' class='btn btn-primary p-4 rounded'><h2><strong>Get started</strong></h2></a>
    </div>

    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/popper.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    </body>
</html>
