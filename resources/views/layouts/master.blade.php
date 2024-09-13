<!doctype html>
<html lang="zxx">
<head>
    <!-- (Changes )Required meta tags-->
    <meta charset="utf-8">
    <meta name="description" content="Discover Tessa Beauty Institute and Tessa Academy. Our institute offers top-notch beauty treatments and advanced aesthetic solutions, while our academy provides comprehensive training programs in beauty and skincare. Visit our online store for high-quality beauty products, shampoos, hair colors, and professional supplies for hairstylists and individuals. Join us for a transformative beauty experience and start your journey towards a successful career in the beauty industry.">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Preloading Fonts for performance -->
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Lato:400&display=swap" as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400&display=swap"></noscript>

    <link rel="preload" href="https://fonts.googleapis.com/css?family=Cabin:400&display=swap" as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:400&display=swap"></noscript>


    <!-- Preloading and Loading CSS files -->
    @vite('resources/css/bootstrap.min.css')
    @vite('resources/css/style.css')
    @vite('resources/css/responsive.css')
    @vite('resources/css/boxicons.min.css')
    @vite('resources/css/flaticon.css')
    @vite('resources/css/dark.css')
    @vite('resources/css/bottom-navbar.css')
    @vite('resources/css/carousel.css')



    @if(!isset($excludeGlobalStyles))
        @vite('resources/css/table.css')
    @endif

    @livewireStyles

    <title>Tessa Academy</title>
    <link rel="icon" type="image/png" href="{{asset('assets/img/tessapurplelogo-01.png')}}">
</head>
<body>
@include('main.alerts')
<style>
    #loading-screen {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        background-color: rgba(255, 255, 255, 0.9); /* White background with slight transparency */
        z-index: 9999;
    }
    #loading-screen svg {
        width: 150px;
        height: auto;
    }
</style>

<div id="loading-screen">
    <svg width="268.000000pt" height="102.000000pt" viewBox="0 0 268.000000 102.000000" preserveAspectRatio="xMidYMid meet">
        <g transform="translate(0.000000,102.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
            <!-- First shape -->
            <path id="shape1" d="M1139 963 c-88 -45 -119 -116 -86 -196 8 -18 53 -81 102 -142 157 -197 211 -298 201 -373 -8 -58 -49 -128 -89 -152 -42 -26 -105 -34 -163 -22 -27 6 -51 9 -53 6 -2 -2 18 -14 45 -26 72 -33 172 -31 240 4 96 50 144 128 144 233 0 51 -6 75 -35 131 -34 69 -53 94 -197 263 -88 104 -111 156 -87 200 8 14 27 32 43 39 40 20 111 -8 138 -54 11 -19 26 -34 34 -34 8 0 14 -8 14 -17 0 -10 3 -28 6 -40 5 -18 1 -25 -20 -33 -17 -6 -26 -17 -26 -32 0 -13 -3 -33 -6 -45 -10 -36 13 -27 45 18 55 76 60 182 9 236 -61 67 -168 81 -259 36z"/>
            <!-- Second shape -->
            <path id="shape2" d="M1605 967 c-71 -34 -97 -66 -103 -125 -6 -63 7 -88 118 -227 99 -124 172 -240 190 -301 10 -34 10 -50 -4 -97 -34 -117 -136 -170 -259 -136 -56 15 -55 5 0 -22 67 -32 181 -33 239 -2 65 34 100 69 128 125 60 121 12 263 -147 435 l-54 57 -47 -14 c-52 -14 -54 -13 -85 43 -19 34 -20 40 -7 59 11 15 12 27 5 45 -5 13 -6 35 -3 49 7 27 58 74 80 74 8 0 19 11 24 25 12 31 51 33 97 5 41 -25 57 -54 40 -72 -15 -16 -18 -240 -2 -235 5 2 23 25 39 51 37 59 47 146 22 194 -43 82 -174 116 -271 69z"/>
            <!-- Third shape -->
            <path id="shape3" d="M83 950 c-26 -11 -31 -45 -7 -54 9 -3 41 -6 73 -6 31 0 62 -5 69 -12 9 -9 12 -95 12 -323 0 -230 4 -316 13 -335 31 -61 125 -60 146 2 7 20 11 146 11 344 l0 314 23 5 c12 3 46 6 76 7 59 3 87 26 63 50 -16 16 -444 23 -479 8z"/>
            <!-- Fourth shape -->
            <path id="shape4" d="M663 953 c-13 -2 -32 -16 -43 -30 -19 -25 -20 -40 -20 -349 0 -342 3 -363 47 -383 37 -17 337 -15 352 3 26 31 3 43 -90 48 -126 6 -132 13 -137 156 -5 138 -2 142 109 142 62 0 81 3 85 15 13 32 -15 45 -95 45 -47 0 -82 5 -89 12 -15 15 -17 245 -2 268 7 11 34 16 97 20 79 4 88 7 88 25 0 12 -9 22 -25 26 -27 8 -241 9 -277 2z"/>
            <!-- Fifth shape -->
            <path id="shape5" d="M2253 948 c-10 -13 -32 -74 -184 -511 -63 -183 -79 -241 -70 -250 19 -19 44 5 66 65 32 88 33 88 151 88 68 0 106 -4 111 -12 4 -7 19 -39 33 -72 31 -76 61 -94 115 -72 39 17 60 56 50 95 -10 38 -211 622 -226 654 -13 29 -31 35 -46 15z m11 -429 c16 -47 27 -93 23 -102 -9 -23 -145 -25 -153 -2 -6 15 5 59 38 143 17 43 25 52 42 50 17 -2 27 -21 50 -89z"/>
            <!-- Sixth shape -->
            <path id="shape6" d="M60 95 c0 -13 56 -15 456 -15 360 0 455 3 452 12 -4 10 -106 14 -456 16 -398 2 -452 0 -452 -13z"/>
            <!-- Seventh shape -->
            <path id="shape7" d="M1917 103 c-4 -3 -7 -10 -7 -15 0 -4 140 -8 311 -8 244 0 310 3 307 13 -4 9 -75 13 -305 15 -164 1 -302 -1 -306 -5z"/>
        </g>
    </svg>
</div>
<div class="switch-box">
    <label class="switch">
        <input type="checkbox" id="darkModeSwitch">
        <span class="slider round"></span>
    </label>
</div>
<!-- Start Top Header Area -->
<div class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <ul class="header-contact-info">
                    <li>{{__('messages.welcome')}}</li>
                    <li>
                        <div class="dropdown language-switcher d-inline-block">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                @if(App::currentLocale() == "shq")
                                    <img src="{{ asset('assets/img/albania-flag-01.webp') }}" alt="image"/>
                                    <span>AL <i class="bx bx-chevron-down"></i></span>
                                @elseif(App::currentLocale() == "en")
                                    <img src="{{ asset('assets/img/us-flag.webp') }}" alt="image"/>
                                    <span>EN <i class="bx bx-chevron-down"></i></span>
                                @elseif(App::currentLocale() == "mk")
                                    <img src="{{ asset('assets/img/macedonia-flag-01.webp') }}" alt="image"/>
                                    <span>MK <i class="bx bx-chevron-down"></i></span>
                                @endif
                            </button>
                            <div class="dropdown-menu">
                                <a href="{{ route('set.language', 'en') }}"
                                   class="dropdown-item d-flex align-items-center">
                                    <img src="{{ asset('assets/img/us-flag.webp') }}" class="shadow-sm" alt="flag"/>
                                    <span>EN</span>
                                </a>
                                <a href="{{ route('set.language', 'shq') }}"
                                   class="dropdown-item d-flex align-items-center">
                                    <img src="{{ asset('assets/img/albania-flag-01.webp') }}" class="shadow-sm"
                                         alt="flag"/>
                                    <span>AL</span>
                                </a>
                                <a href="{{ route('set.language', 'mk') }}"
                                   class="dropdown-item d-flex align-items-center">
                                    <img src="{{ asset('assets/img/macedonia-flag-01.webp') }}" class="shadow-sm"
                                         alt="flag"/>
                                    <span>MK</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12 d-flex justify-content-end">
                <div class="d-none d-lg-block">
                    @auth
                        <ul class="header-top-menu">

                            <li><a href="{{route('profile.edit')}}"><i
                                        class="bx bxs-user"></i>{{__('messages.my_account')}}</a></li>
                            @if(!auth()->user()->request_submitted)
                                <li><a href="{{ url('request_form') }}"><i
                                            class="bx bx-log-in"></i>{{__('messages.request_stylist')}}</a></li>
                            @endif
                            <li><a href="{{ route('my.orders') }}"><i
                                        class="bx bxs-user"></i>{{__('messages.my_orders')}}</a></li>
                            <li>
                                <a href="#"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                   style="text-decoration: none; color: inherit; display: flex; align-items: center;">
                                    <i class="bx bx-log-in"></i> <span
                                        style="margin-left: 5px;">{{__('messages.log_out')}}</span>
                                </a>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    @else
                        <ul class="header-top-menu">
                            <li><a href="{{ route('login') }}"><i class="bx bx-log-in"></i>{{__('messages.login')}}</a>
                            </li>
                            <li><a href="{{ route('register') }}"><i
                                        class="bx bx-log-in"></i>{{__('messages.register')}}</a></li>
                        </ul>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Top Header Area -->
<!-- Start Phone Sidebar-->
<!-- Start Phone Sidebar/ Burger menu-->
<div class="modal right fade sidebarModal" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>
            <div class="modal-body">
                <ul class="nav-menu-list">
                    <li class="hide-on-mobile"><a href="{{ url('/') }}"><i
                                class="bx bx-home"></i>{{__('messages.home')}}</a></li>
                    <li class="hide-on-mobile"><a href="{{ route('shop') }}"><i
                                class="bx bx-store"></i>{{__('messages.shop')}}</a></li>
                    @auth()
                        <li class="hide-on-mobile"><a href="{{ route('show.wishlist') }}"><i
                                    class="bx bx-heart"></i>{{__('messages.wishlist')}}</a></li>
                    @endauth
                    <li><a href="{{url('/contact')}}"><i class="bx bx-phone"></i>{{__('messages.contact')}}</a></li>
                    <li><a href="{{ url('/treatments') }}"><i class="bx bx-info-circle"></i>{{__('messages.Treatments')}}</a></li>
                    @auth()
                        <li><a href="{{ url('/profile') }}"><i class="bx bxs-user"></i>{{__('messages.my_account')}}</a></li>
                        @if(!auth()->user()->request_submitted)
                            <li><a href="{{ url('request_form') }}"><i
                                        class="bx bx-log-in"></i>{{__('messages.request_stylist')}}</a></li>
                        @endif
                        <li><a href="{{ route('my.orders') }}"><i class="bx bx-package"></i>{{__('messages.my_orders')}}
                            </a></li>
                        <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();">
                                <i class="bx bx-log-out"></i> Logout</a></li>
                </ul>
                <form id="logout-form-sidebar" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>
                @else
                    <ul class="nav-menu-list">
                        <li><a href="{{ route('login') }}"><i class="bx bx-log-in"></i>{{__('messages.login')}}</a></li>
                        <li><a href="{{ route('register') }}"><i class="bx bx-log-in"></i>{{__('messages.register')}}
                            </a></li>
                    </ul>
                @endauth
            </div>
        </div>
    </div>
</div>
<!-- End Phone Sidebar-->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="xton-responsive-nav">
        <div class="container">
            <div class="xton-responsive-menu">
                <!-- Logo on the left -->
                <div class="logo">
                    <a href="/">
                        <img src="{{asset('assets/img/tessablack3.png')}}" class="main-logo" alt="logo"/>
                        <img src="{{asset('assets/img/tesawhitelogo.png')}}" class="white-logo" alt="logo"/>
                    </a>
                </div>

                <!-- Search, Cart, and Burger Menu on the far right -->
                <div class="others-option">
                    <div class="option-item">
                        <div class="search-btn-box">
                            <i class="search-btn bx bx-search-alt"></i>
                        </div>
                    </div>
                    <div class="option-item">
                        <a href="{{ route('show.wishlist') }}"
                           class="nav-item{{ request()->routeIs('wishlist') ? ' active' : '' }}">
                            <i class="bx bx-heart"></i>
                        </a>
                    </div>
                    <div class="option-item">
                        <livewire:Cart.CartCounter/>
                    </div>
                </div>

                <!-- Burger Menu -->
                <div class="burger-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="xton-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('assets/img/tessalogo2.png')}}" class="main-logo" alt="logo"/>
                    <img src="{{asset('assets/img/tesawhitelogo.png')}}" class="white-logo" alt="logo"/>
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}"
                               class="nav-link{{ request()->routeIs('main') ? ' active' : '' }}">{{__('messages.home')}}</a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="{{ route('shop') }}"
                               class="nav-link{{ request()->routeIs('shop') ? ' active' : '' }}">{{__('messages.shop')}}</a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="{{route('treatments')}}" class="nav-link{{ request()->routeIs('treatments') ? ' active' : '' }}">{{__('messages.Treatments')}}
                            </a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="{{url('/contact')}}" class="nav-link{{ request()->routeIs('contact') ? ' active' : '' }}">{{__('messages.contact')}}</a>
                        </li>
                    </ul>
                </div>
                <div class="others-option">
                    <div class="option-item">
                        <div class="search-btn-box">
                            <i class="search-btn bx bx-search-alt"></i>
                        </div>
                    </div>
                    <div class="option-item">
                        <a href="{{ route('show.wishlist') }}"
                           class="nav-item{{ request()->routeIs('wishlist') ? ' active' : '' }}">
                            <i class="bx bx-heart"></i>
                        </a>
                    </div>
                    <div class="option-item">
                        <livewire:Cart.CartCounter/>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
<!-- Start Sticky Navbar Area -->
<div class="navbar-area header-sticky">
    <div class="xton-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('assets/img/tessablack3.png')}}" class="main-logo" alt="logo"/>
                    <img src="{{asset('assets/img/tesawhitelogo.png')}}" class="white-logo" alt="logo"/>
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}"
                               class="nav-link{{ request()->routeIs('show_products') ? ' active' : '' }}">{{__('messages.home')}}</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('shop') }}"
                               class="nav-link{{ request()->routeIs('shop') ? ' active' : '' }}">{{__('messages.shop')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('treatments')}}"
                               class="nav-link{{ request()->routeIs('treatments') ? ' active' : '' }}">{{__('messages.Treatments')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/contact')}}" class="nav-link">{{__('messages.contact')}}</a>
                        </li>
                    </ul>
                    <div class="others-option">
                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="search-btn bx bx-search-alt"></i>
                            </div>
                        </div>
                        <div class="option-item">
                            <a href="{{ route('show.wishlist') }}"
                               class="nav-item{{ request()->routeIs('wishlist') ? ' active' : '' }}">
                                <i class="bx bx-heart"></i>
                            </a>
                        </div>
                        <div class="option-item">
                            <livewire:Cart.CartCounter/>
                        </div>
                        <div class="option-item">
                            <div class="burger-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Header Area -->
<!-- Start Search Overlay -->
<livewire:search/>
<!-- End Search Overlay -->

@yield('content')

<!-- Start Instagram Area -->
<div class="instagram-area">
    <div class="container-fluid">
        <div class="instagram-title">
            <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank"><i
                    class='bx bxl-instagram'></i>{{__('messages.follow_us')}}</a>
        </div>

        <div class="instagram-slides">
            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto1.webp')}}" alt="image" width="317.16" height="317.16">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto2.webp')}}" alt="image" width="317.16" height="317.16">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto3.webp')}}" alt="image" width="317.16" height="317.16">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto4.webp')}}" alt="image" width="317.16" height="317.16">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto5.webp')}}" alt="image" width="317.16" height="317.16">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto6.webp')}}" alt="image" width="317.16" height="317.16">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto7.webp')}}" alt="image" width="317.16" height="317.16">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto1.webp')}}" alt="image" width="317.16" height="317.16">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto2.webp')}}" alt="image" width="317.16" height="317.16">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto3.webp')}}" alt="image" width="317.16" height="317.16">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Area -->
<!-- Start Shopping Cart Modal -->
<div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>
            <livewire:Cart.ShowCart :view="'show-cart-modal'"/>
        </div>
    </div>
</div>
</div>
<!-- End Shopping Cart Modal -->
<!-- Start Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>{{__('messages.about_the_store')}}</h3>
                    <div class="about-the-store">
                        <ul class="footer-contact-info">
                            <li>
                                <i class="bx bx-map"></i>
                                <a href="#" target="_blank">{{__('messages.gv_nmkd')}}</a>
                            </li>
                            <li>
                                <i class="bx bx-phone-call"></i>
                                <a href="">+389 78 286 003</a>
                            </li>
                            <li>
                                <i class="bx bx-envelope"></i>
                                <a href="">tessa@tessa.com</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="social-link">
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=362511444362431&_rdr" class="d-block"
                               target="_blank"
                            ><i class="bx bxl-facebook"></i
                                ></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/tessabeauty.institute/" class="d-block" target="_blank"
                            ><i class="bx bxl-instagram"></i
                                ></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget pl-4">
                    <h3>{{__('messages.quick_links')}}</h3>
                    <ul class="quick-links">
                        <li><a href="{{url('/')}}">{{__('messages.home')}}</a></li>
                        <li><a href="{{route('shop')}}">{{__('messages.shop')}}</a></li>
                        <li><a href="{{url('/contact')}}">{{__('messages.contact')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>{{__('messages.customer_support')}}</h3>
                    <ul class="customer-support">
                        <li><a href="{{route('profile.edit')}}">{{__('messages.my_account')}}</a></li>
                        <li><a href="{{url('/contact')}}">{{__('messages.Help')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>{{__('messages.NewsLetter')}}</h3>
                    <div class="footer-newsletter-box">
                        <p>{{__('messages.newsletter_prompt')}}</p>
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <label>{{__('messages.YourEmail')}}</label>
                            <input
                                type="email"
                                class="input-newsletter"
                                placeholder="{{__('messages.enter_your_email')}}"
                                name="EMAIL"
                                required
                                autocomplete="off"
                            />
                            <button type="submit">{{__('messages.Subscribe')}}</button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
            </div>
        </div>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</footer>
<!-- End Footer Area -->

<div class="bottom-navbar">
    <div class="container ">
        <nav class="navbar">
            <a href="{{ url('/') }}" class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                <i class="bx bx-home-alt"></i>
            </a>
            <a href="{{ route('shop') }}" class="nav-item{{ request()->is('shop') ? ' active' : '' }}">
                <i class="bx bx-store"></i>
            </a>

            <div class="search-btn-box nav-item{{ request()->is('contact') ? ' active' : '' }}" data-url="#">
                <i class="search-btn bx bx-search-alt"></i>
            </div>

            <div class="nav-item">
                <livewire:Cart.CartCounter/>
            </div>


            @auth
                <a href="{{ route('show.wishlist') }}" class="nav-item{{ request()->is('wishlist') ? ' active' : '' }}">
                    <i class="bx bx-heart"></i>
                </a>
            @endauth
        </nav>
    </div>
</div>


<div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

<!-- Links of JS files -->
@vite('resources/js/bootstrap.bundle.min.js')
@vite('resources/js/sticky-sidebar.min.js')
@vite('resources/js/main.js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
@yield('scripts')


@livewireScripts
</body>
</html>
