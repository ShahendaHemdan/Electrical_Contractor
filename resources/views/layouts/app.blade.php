<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('images/electric-icon.jpg') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" />

    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            color: white;
            background-color: #ffffff24;
        }

        footer {
            margin-top: 0px auto;
        }
    </style>
</head>

<body class="main-layout">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    <div class="full">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="#" /></a>
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <ul class="navbar-nav mr-auto">
                            @yield('nav-items')
                        </ul>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto text-white">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end bg-dark" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('header-content')
    <div class="container">
        @yield('content')
    </div>
    <!-- Our  project section -->
    <div id="project" class="project" style="margin: 20px 0px 20px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                            as opposed to using 'Content
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="project_box before_top">
                        <figure><img src="{{ asset('images/project_img1.jpg') }}" alt="#" /></figure>
                        <h3>Modern Fixture</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project_box margin_top1 before_bottom">
                        <figure class="marging_top4"><img src="{{ asset('images/project_img2.jpg') }}" alt="#" />
                        </figure>
                        <h3>Vintage chandlier</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project_box before_top">
                        <figure><img src="{{ asset('images/project_img3.jpg') }}" alt="#" /></figure>
                        <h3>bulpilo</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Our project section -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="fid_box">
                            <h3>Contact </h3>
                            <ul class="location_icon">
                                <li><a href="Javascript:void(0)"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i></a><br> It
                                    is a long established fact that a <br>reader will be distracted</li>
                                <li><a href="Javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a><br>
                                    (+71) 1234567890<br> (+71) 1234567890
                                </li>
                                <li><a href="Javascript:void(0)"><i class="fa fa-envelope"
                                            aria-hidden="true"></i></a><br>
                                    demo@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('images/logo.png') }}" alt="#" />
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>

</html>
