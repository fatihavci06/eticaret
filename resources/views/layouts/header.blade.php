<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tag -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta name='description' content="@yield('description')">
    <meta name='keywords' content="@yield('keywords')">
    <meta name='author' content="@yield('author')">
     <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>@yield('title') </title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('front/')}}/images/favicon.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <!-- StyleSheet -->
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/slicknav.min.css">
    
    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/reset.css">
    <link rel="stylesheet" href="{{asset('front/')}}/style.css">
    <link rel="stylesheet" href="{{asset('front/')}}/css/responsive.css">
     @livewireStyles

    
    
</head>

<body class="js">
    
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    
    
    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="ti-headphone-alt"></i> {{$setting->phone}}</li>
                                <li><i class="ti-email"></i> {{$setting->email}}</li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="ti-location-pin"></i> {{$setting->address}}</li>
                                <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
                                @auth<li><i class="ti-user"></i> <a href="{{route('myuser')}}">{{ Auth::user()->name }}</a></li>
                                    <li>
                                        <form action="{{route('logout')}}" method="post">@csrf <button  type="submit"> Çıkış</button> </form>

                                        
                                @endauth
                                @guest<li><i class="ti-power-off"></i><a href="{{route('login')}}">Login</a></li>
                                        <li><i class="ti-power-off"></i><a href="{{route('register')}}">Register</a></li>
                                @endguest
                            </ul>
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="{{asset('front/')}}/images/logo.png" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form action="{{route('getproduct')}}" method="post" class="search-form">
                                    @csrf
                                    @livewire('search')
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                                @livewireScripts
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        
                             @livewire('search')
                             @livewireScripts
                                            </div>

                    @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                     @endif
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar shopping">
                                <a href="{{route('user_shopcart')}}" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{ \App\Http\Controllers\ShopcartController::shopcartcount() }}</span></a>
                                <!-- Shopping Item -->
                                
                                <!--/ End Shopping Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>