<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @livewireStyles

    <title>Tessa Academy</title>

    <link rel="icon" type="image/png" href="{{asset('assets/img/tessapurplelogo-01.png')}}">

</head>
<body>

<!-- Start Top Header Area -->
<div class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <ul class="header-contact-info">
                    <li>Welcome to Tessa</li>
                    <li>Call: <a href="tel:+01321654214">+389 78 286 003</a></li>
                    <li>
                        <div class="dropdown language-switcher d-inline-block">
                            <button
                                class="dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <img src="{{asset('assets/img/us-flag.jpg')}}" alt="image" />
                                <span>EN <i class="bx bx-chevron-down"></i></span>
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img
                                        src="{{asset('assets/img/albania-flag-01.png')}}"
                                        class="shadow-sm"
                                        alt="flag"
                                    />
                                    <span>AL</span>
                                </a>
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img
                                        src="{{asset('assets/img/macedonia-flag-01.png')}}"
                                        class="shadow-sm"
                                        alt="flag"
                                    />
                                    <span>MK</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12">
                @auth
                    <!-- Displayed when the user is logged in -->
                    <ul class="header-top-menu">
                        <li><a href="#"><i class="bx bxs-user"></i> My Account</a></li>
                        <li><a href="{{ route('my.orders') }}"><i class="bx bxs-user"></i> My orders</a></li>
                        <li><a href="{{ route('show.wishlist') }}"><i class="bx bx-heart"></i> Wishlist</a></li>
                        <li>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-decoration: none; color: inherit; display: flex; align-items: center;">
                                <i class="bx bx-log-in"></i> <span style="margin-left: 5px;">Log Out</span>
                            </a>

                            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                @csrf
                            </form>
                        </li>


                    </ul>
                @else
                    <!-- Displayed when the user is not logged in -->
                    <ul class="header-top-menu">
                        <li><a href="{{ route('login') }}"><i class="bx bx-log-in"></i> Login</a></li>
                        <li><a href="{{ route('register') }}"><i class="bx bx-log-in"></i> Register</a></li>
                    </ul>
                @endauth
                <ul class="header-top-others-option">
                    <div class="option-item">
                        <div class="search-btn-box">
                            <i class="search-btn bx bx-search-alt"></i>
                        </div>
                    </div>
                    <div class="option-item">
                        <div class="cart-btn">
                            <a
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#shoppingCartModal"
                            ><i class="bx bx-shopping-bag"></i><span>0</span></a
                            >
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- End Top Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="xton-responsive-nav">
        <div class="container">
            <div class="xton-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="{{asset('assets/img/tessablack3.png')}}" class="main-logo" alt="logo" />
                        <img
                            src="{{asset('assets/img/tesawhitelogo.png')}}"
                            class="white-logo"
                            alt="logo"
                        />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="xton-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('assets/img/tessalogo2.png')}}" class="main-logo" alt="logo" />
                    <img
                        src="{{asset('assets/img/tesawhitelogo.png')}}"
                        class="white-logo"
                        alt="logo"
                    />
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link{{ request()->routeIs('show_products') ? ' active' : '' }}">Home</a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="{{ route('shop') }}" class="nav-link{{ request()->routeIs('shop') ? ' active' : '' }}">Shop</a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="../blog-1.html" class="nav-link">Courses </a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="../about.html" class="nav-link">About Us </a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="../contact.html" class="nav-link">Contact </a>
                        </li>
                    </ul>
                    <div class="others-option">
                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="search-btn bx bx-search-alt"></i>
                            </div>
                        </div>
                        <div class="option-item">
                            @livewire('cart.cart-counter')


                        </div>
                        <div class="option-item">
                            <div
                                class="burger-menu"
                                data-bs-toggle="modal"
                                data-bs-target="#sidebarModal"
                            >
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
<!-- End Navbar Area -->
<!-- Start Sticky Navbar Area -->
<div class="navbar-area header-sticky">
    <div class="xton-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('assets/img/tessablack3.png')}}" class="main-logo" alt="logo" />
                    <img
                        src="{{asset('assets/img/tesawhitelogo.png')}}"
                        class="white-logo"
                        alt="logo"
                    />
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link{{ request()->routeIs('show_products') ? ' active' : '' }}">Home</a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="{{ route('shop') }}" class="nav-link{{ request()->routeIs('shop') ? ' active' : '' }}">Shop</a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="../blog-1.html" class="nav-link">Courses</a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="../about.html" class="nav-link">About Us </a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="../contact.html" class="nav-link">Contact </a>
                        </li>
                    </ul>
                    <div class="others-option">
                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="search-btn bx bx-search-alt"></i>
                            </div>
                        </div>
                        <div class="option-item">
                            @livewire('cart.cart-counter')

                        </div>
                        <div class="option-item">
                            <div
                                class="burger-menu"
                                data-bs-toggle="modal"
                                data-bs-target="#sidebarModal"
                            >
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
    @livewire('search')
<!-- End Search Overlay -->

@yield('content')

<!-- Start Facility Area -->
<section class="facility-area pb-70">
    <div class="container">
        <div class="facility-slides owl-carousel owl-theme">
            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-tracking'></i>
                </div>
                <h3>Free Shipping Worldwide</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-return'></i>
                </div>
                <h3>Easy Return Policy</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-shuffle'></i>
                </div>
                <h3>7 Day Exchange Policy</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-sale'></i>
                </div>
                <h3>Weekend Discount Coupon</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-credit-card'></i>
                </div>
                <h3>Secure Payment Methods</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-location'></i>
                </div>
                <h3>Track Your Package</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-customer-service'></i>
                </div>
                <h3>24/7 Customer Support</h3>
            </div>
        </div>
    </div>
</section>
<!-- End Facility Area -->

<!-- Start Instagram Area -->
<div class="instagram-area">
    <div class="container-fluid">
        <div class="instagram-title">
            <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank"><i class='bx bxl-instagram'></i> Follow us on @tessa</a>
        </div>

        <div class="instagram-slides owl-carousel owl-theme">
            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto1.jpg')}}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto2.jpg')}}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto3.jpg')}}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto4.jpg')}}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto5.jpg')}}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto6.jpg')}}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto7.jpg')}}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto1.jpg')}}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto2.jpg')}}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="{{asset('assets/img/instagram/foto3.jpg')}}" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Area -->
<!-- Start Sidebar Modal -->
<div class="modal right fade sidebarModal" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>

            <div class="modal-body">
                <div class="sidebar-about-content">
                    <h3>About The Store</h3>

                    <div class="about-the-store">
                        <p>One of the most popular on the web is shopping. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                        <ul class="sidebar-contact-info">
                            <li><i class='bx bx-map'></i> <a href="#" target="_blank">Gostivar , North Macedonia</a></li>
                            <li><i class='bx bx-phone-call'></i> <a href="tel:+01321654214">+389 78 286 003</a></li>
                            <li><i class='bx bx-envelope'></i> <a href="mailto:hello@xton.com">tessa.academy@gmail.com</a></li>
                        </ul>
                    </div>

                    <ul class="social-link">
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                    </ul>
                </div>

                <div class="sidebar-new-in-store">
                    <h3>New In Store</h3>

                    <ul class="products-list">
                        <li>
                            <a href="#"><img src="{{asset('assets/img/produkt prova-01.png')}}" alt="image"></a>
                        </li>

                        <li>
                            <a href="#"><img src="{{asset('assets/img/produkt prova 2-01.png')}}" alt="image"></a>
                        </li>

                        <li>
                            <a href="#"><img src="{{asset('assets/img/produkt prova 3-01.png')}}" alt="image"></a>
                        </li>

                        <li>
                            <a href="#"><img src="{{asset('assets/img/produkt prova 4-01.png')}}" alt="image"></a>
                        </li>
                    </ul>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="../products-sidebar-fullwidth.html" class="shop-now-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->
<!-- Start Shopping Cart Modal -->
<div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>
            @livewire('cart.ShowCart', ['view' => 'show-cart-modal'])
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
                    <h3>About The Store</h3>
                    <div class="about-the-store">
                        <p>One of the most popular on the web is shopping.</p>
                        <ul class="footer-contact-info">
                            <li>
                                <i class="bx bx-map"></i>
                                <a href="#" target="_blank">Gostivar , North Macedonia</a>
                            </li>
                            <li>
                                <i class="bx bx-phone-call"></i>
                                <a href="tel:+01321654214">+389 78 286 003</a>
                            </li>
                            <li>
                                <i class="bx bx-envelope"></i>
                                <a href="mailto:hello@xton.com">tessa.academy@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="social-link">
                        <li>
                            <a href="#" class="d-block" target="_blank"
                            ><i class="bx bxl-facebook"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" class="d-block" target="_blank"
                            ><i class="bx bxl-twitter"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" class="d-block" target="_blank"
                            ><i class="bx bxl-instagram"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" class="d-block" target="_blank"
                            ><i class="bx bxl-linkedin"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" class="d-block" target="_blank"
                            ><i class="bx bxl-pinterest-alt"></i
                                ></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget pl-4">
                    <h3>Quick Links</h3>
                    <ul class="quick-links">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="../products-sidebar-fullwidth.html">Shop</a></li>
                        <li><a href="../blog-1.html">Courses</a></li>
                        <li><a href="../about.html">About Us</a></li>
                        <li><a href="../contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Customer Support</h3>
                    <ul class="customer-support">
                        <li><a href="../login.html">My Account</a></li>
                        <li><a href="../checkout.html">Checkout</a></li>
                        <li><a href="../cart.html">Cart</a></li>
                        <li><a href="../track-order.html">Order Tracking</a></li>
                        <li><a href="../contact.html">Help & Support</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Newsletter</h3>
                    <div class="footer-newsletter-box">
                        <p>To get the latest news and latest updates from us.</p>
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <label>Your E-mail Address:</label>
                            <input
                                type="email"
                                class="input-newsletter"
                                placeholder="Enter your email"
                                name="EMAIL"
                                required
                                autocomplete="off"
                            />
                            <button type="submit">Subscribe</button>
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
                <div class="col-lg-6 col-md-6">
                    <ul class="payment-types">
                        <li>

                            <img src="{{asset('assets/img/payment/visa.png')}}" alt="image"
                            />
                        </li>
                        <li>

                            <img src="{{asset('assets/img/payment/mastercard.png')}}" alt="image"
                            />
                        </li>
                        <li>

                            <img src="{{asset('assets/img/payment/mastercard2.png')}}" alt="image"
                            />
                        </li>
                        <li>

                            <img src="{{asset('assets/img/payment/visa2.png')}}" alt="image"
                            />
                        </li>
                        <li>

                            <img src="{{asset('assets/img/payment/expresscard.png')}}" alt="image"
                            />
                        </li>
                    </ul>
                </div>
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

<div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

<!-- Links of JS files -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/sticky-sidebar.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

@livewireScripts
</body>
</html>

