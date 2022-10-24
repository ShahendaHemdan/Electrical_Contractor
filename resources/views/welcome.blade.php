<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>EOC - Welcome</title>
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
        .navbar {
            margin-bottom: 1px;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            color: white;
            background-color: #ffffff24;
        }
    </style>
</head>

<body class="antialiased">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    <div class="full">
                        <div class="logo">
                            <img src="images/logo.png" alt="#" />
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
    <div class="Content-tobe-mutated">
        <!-- banner -->
        <section class="banner_main">
            <div id="banner1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="text-bg">
                                            <h1> <span class="yellow"> Electrical </span> <br>Contractor</h1>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readablecontent
                                                of a page when looking at its layout. The point of using Lorem </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- end banner -->
        <!-- service section -->
        <div class="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2><img src="{{ asset('images/heading_icon.png') }}" alt="#" /><span
                                    class="yellow">Providing a
                                    Range</span> <br>
                                <span class="appp_l">Commercial & Residential Services </span>
                            </h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered
                                alteration in some form, by injected humour</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="service_box">
                            <i><img src="{{ asset('images/service_icon1.png') }}" alt="#" /></i>
                            <div class="service_text">
                                <h3> Electrical Testing</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of<br>
                                    a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less
                                    normal distribution of letters, as opposed to using 'Content here, content here',
                                    making it
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="service_box">
                            <i><img src="{{ asset('images/service_icon2.png') }}" alt="#" /></i>
                            <div class="service_text">
                                <h3>Cable Change</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of
                                    <br>
                                    a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less
                                    normal distribution of letters, as opposed to using 'Content here, content here',
                                    making it
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="service_box">
                            <i><img src="{{ asset('images/service_icon3.png') }}" alt="#" /></i>
                            <div class="service_text">
                                <h3>Emergy Survey</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content ofa
                                    page
                                    when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less
                                    normal
                                    distribution of letters, as opposed to using 'Content here, content here', making it
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="service_box border_bottom1">
                            <i><img src="{{ asset('images/service_icon4.png') }}" alt="#" /></i>
                            <div class="service_text">
                                <h3> Security Alert </h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content ofa
                                    page
                                    when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less
                                    normal
                                    distribution of letters, as opposed to using 'Content here, content he<br>
                                    re', making it
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end service section -->
        <!-- about section -->
        <div id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="titlepage">
                            <h2> <img src="{{ asset('images/heading_icon.png') }}" alt="#">About <span
                                    class="yellow">Us</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                ofa page
                                when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                normal
                                distribution of letters, as opposed to using 'Content here, content here', making it
                            </p>
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <div class="about_img">
                            <figure><img src="{{ asset('images/about_img.png') }}" alt="#" /></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about section -->
    </div>
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
                        <img src="{{ asset('images/logo2.png') }}" alt="#" />
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
    </script>
</body>

</html>
