<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}, width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/modal.js') }}" defer></script>
    <script src="{{ asset('js/function.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .card-text::-webkit-scrollbar {
            display: none;
        }

    /* Hide scrollbar for IE, Edge and Firefox */
        .card-text {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        .members::-webkit-scrollbar {
            display: none;
        }

    /* Hide scrollbar for IE, Edge and Firefox */
        .members {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        .btn{
            font-size:12px;
        }
        .card-title{
            font-size:13px;
            font-weight:bold;
            flex:1;
        }
        a{
            font-family: serif;
        }
    </style>
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/storage/icons/logo.png" alt="">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            @auth
            <div class="navbar-nav">
                <a href="{{ url('/home') }}" class="nav-item nav-link">Home</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link">Profile</a>
                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                <a href="{{ url('/userManual') }}" class="nav-item nav-link">User manual</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Messages</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Inbox</a>
                        <a href="#" class="dropdown-item">Sent</a>
                        <a href="#" class="dropdown-item">Drafts</a>
                    </div>
                </div>
            </div>
            <form class="d-flex">
                <div class="input-group">                    
                    <search></search>
                </div>
            </form>
            @endauth
            <div class="navbar-nav">
            @guest
                    @if (Route::has('login'))
                        <a class="nav-item nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif

                    @if (Route::has('register'))
                        <a class="nav-item nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=''>
                                Profile
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                @endguest
            </div>
        </div>
    </div>
</nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div style=' overflow:auto' class="modal fade p-0" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg pt-4" style='max-width:100%; width:auto; text-align: -webkit-center;' role="document">
            <img class="img-fluid" style='max-height:90vh' id="img01">
          </div>
        </div>
</body>
</html>
