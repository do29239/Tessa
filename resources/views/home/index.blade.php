<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dark.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Tessa Academy</title>

    <link rel="icon" type="image/png" href="assets/img/tessapurplelogo-01.png">
    <script src="cart.js"></script>
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
                                <img src="assets/img/us-flag.jpg" alt="image" />
                                <span>EN <i class="bx bx-chevron-down"></i></span>
                            </button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img
                                        src="assets/img/albania-flag-01.png"
                                        class="shadow-sm"
                                        alt="flag"
                                    />
                                    <span>AL</span>
                                </a>
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img
                                        src="assets/img/macedonia-flag-01.png"
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
                <ul class="header-top-menu">
                    <li>
                        <a href="../main/login.html"><i class="bx bxs-user"></i> My Account</a>
                    </li>
                    <li>
                        <a
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#shoppingWishlistModal"
                        ><i class="bx bx-heart"></i> Wishlist</a
                        >
                    </li>
                    <li>
                        <a href="{{ route('register') }}"><i class="bx bx-log-in"></i> Register</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}"><i class="bx bx-log-in"></i> Login</a>
                    </li>
                </ul>
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
                    <a href="../index-2.html">
                        <img src="assets/img/tessablack3.png" class="main-logo" alt="logo" />
                        <img
                            src="assets/img/tesawhitelogo.png"
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
                <a class="navbar-brand" href="../index-2.html">
                    <img src="assets/img/tessalogo2.png" class="main-logo" alt="logo" />
                    <img
                        src="assets/img/tesawhitelogo.png"
                        class="white-logo"
                        alt="logo"
                    />
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../index-2.html" class="nav-link active">Home </a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="../products-sidebar-fullwidth.html" class="nav-link">Shop </a>
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
                            <div class="cart-btn">
                                <a
                                    href="#"
                                    data-bs-toggle="modal"
                                    data-bs-target="#shoppingCartModal"
                                ><i class="bx bx-shopping-bag"></i><span>0</span></a
                                >
                            </div>
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
                <a class="navbar-brand" href="../index-2.html">
                    <img src="assets/img/tessablack3.png" class="main-logo" alt="logo" />
                    <img
                        src="assets/img/tesawhitelogo.png"
                        class="white-logo"
                        alt="logo"
                    />
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../index-2.html" class="nav-link active">Home </a>
                        </li>
                        <li class="nav-item megamenu">
                            <a href="../products-sidebar-fullwidth.html" class="nav-link">Shop </a>
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
                            <div class="cart-btn">
                                <a
                                    href="#"
                                    data-bs-toggle="modal"
                                    data-bs-target="#shoppingCartModal"
                                ><i class="bx bx-shopping-bag"></i><span>0</span></a
                                >
                            </div>
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
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>

            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>

            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="submit"><i class='bx bx-search-alt'></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Search Overlay -->

<!-- Start Main Banner Area -->
<div class="home-slides-two owl-carousel owl-theme">
    <div class="main-banner banner-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="banner-content text-white">
                                <div class="line"></div>
                                <span class="sub-title">Trending Women's Collection</span>
                                <h1>New Inspiration 2021</h1>
                                <p>Click here to shop in your local currency. We ship over 2 million products around the world!</p>
                                <div class="btn-box">
                                    <a href="../products-sidebar-fullwidth.html" class="default-btn">Shop Women's</a>
                                    <a href="../products-sidebar-fullwidth.html" class="optional-btn">Shop Men's</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner banner-bg4">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="banner-content text-white">
                                <div class="line"></div>
                                <span class="sub-title">Make Your Fashion Smarter</span>
                                <h1>Clothing made for you!</h1>
                                <p>Click here to shop in your local currency. We ship over 2 million products around the world!</p>
                                <div class="btn-box">
                                    <a href="../products-sidebar-fullwidth.html" class="default-btn">Shop Women's</a>
                                    <a href="../products-sidebar-fullwidth.html" class="optional-btn">Shop Men's</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner banner-bg5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="banner-content text-white">
                                <div class="line"></div>
                                <span class="sub-title">Clothing Made For You!</span>
                                <h1>Your Fashion Smarter</h1>
                                <p>Click here to shop in your local currency. We ship over 2 million products around the world!</p>
                                <div class="btn-box">
                                    <a href="../products-sidebar-fullwidth.html" class="default-btn">Shop Women's</a>
                                    <a href="../products-sidebar-fullwidth.html" class="optional-btn">Shop Men's</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Categories Banner Area -->
<section class="categories-banner-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="categories-box">
                    <img src="assets/img/products/orrossss1.jpg" alt="image">

                    <div class="content">
                        <h3>New Collections!</h3>
                    </div>

                    <a href="../products-sidebar-fullwidth.html" class="link-btn"></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="assets/img/partner/fanolared.jpg" alt="image">

                            <div class="content">
                                <h3>Our Popular Products</h3>
                            </div>

                            <a href="../products-sidebar-fullwidth.html" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="assets/img/partner/rr-linee-noline.jpg" alt="image">

                            <div class="content">
                                <h3>Hot Trending Products</h3>
                            </div>

                            <a href="../products-sidebar-fullwidth.html" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="categories-box">
                            <img src="assets/img/partner/fanola-cover.jpg" alt="image">

                            <div class="content">
                                <h3>Popular Brands!</h3>
                            </div>

                            <a href="../products-sidebar-fullwidth.html" class="link-btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Categories Banner Area -->

<!-- Start Products Area -->
<section class="products-area pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Recent Products</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box">
                    <div class="products-image">
                        <a href="products-type-2.html">
                            <img src="assets/img/produkt prova 2-01.png" class="main-image" alt="image">
                            <img src="assets/img/produkt prova 2-01.png" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="new-tag">New!</div>
                    </div>

                    <div class="products-content">
                        <span class="category">T-Shirt</span>
                        <h3><a href="products-type-2.html">Long Sleeve Leopard T-Shirt</a></h3>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            <span class="old-price">$321</span>
                            <span class="new-price">$250</span>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>

                    <span class="products-discount">
                                <span>
                                    20% OFF
                                </span>
                            </span>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box">
                    <div class="products-image">
                        <a href="products-type-2.html">
                            <img src="assets/img/produkt prova 3-01.png" class="main-image" alt="image">
                            <img src="assets/img/produkt prova 3-01.png" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <span class="category">T-Shirt</span>
                        <h3><a href="products-type-2.html">Causal V-Neck Soft Raglan</a></h3>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box">
                    <div class="products-image">
                        <a href="products-type-2.html">
                            <img src="assets/img/produkt prova 4-01.png" class="main-image" alt="image">
                            <img src="assets/img/produkt prova 4-01.png" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <span class="category">Shirt</span>
                        <h3><a href="products-type-2.html">Hanes Men's Pullover</a></h3>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            <span class="new-price">$200</span>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box">
                    <div class="products-image">
                        <a href="products-type-2.html">
                            <img src="assets/img/products/rr-product-2-01.png" class="main-image" alt="image">
                            <img src="assets/img/products/rr-product-2-01.png" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="sale-tag">Sale!</div>
                    </div>

                    <div class="products-content">
                        <span class="category">Twist Shirt</span>
                        <h3><a href="products-type-2.html">Gildan Men's Crew T-Shirt</a></h3>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            <span class="new-price">$150</span>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box">
                    <div class="products-image">
                        <a href="products-type-2.html">
                            <img src="assets/img/products/rr-product-3-01.png" class="main-image" alt="image">
                            <img src="assets/img/products/rr-product-3-01.png" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <span class="category">Smart Shirt</span>
                        <h3><a href="products-type-2.html">Yidarton Women's Comfy</a></h3>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            <span class="new-price">$240</span>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>

                    <span class="products-discount">
                                <span>
                                    15% OFF
                                </span>
                            </span>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box">
                    <div class="products-image">
                        <a href="products-type-2.html">
                            <img src="assets/img/products/rr-produuct-1-01.png" class="main-image" alt="image">
                            <img src="assets/img/products/rr-produuct-1-01.png" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <span class="category">EcoSmart</span>
                        <h3><a href="products-type-2.html">Womens Tops Color</a></h3>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            <span class="old-price">$150</span>
                            <span class="new-price">$100</span>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Products Area -->

<!-- Start Offer Area -->
<section class="offer-area bg-image2 ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-6 offset-lg-7 offset-md-6">
                <div class="offer-content-box">
                    <span class="sub-title">Limited Time Offer!</span>
                    <h2>-40% OFF</h2>
                    <p>Get The Best Deals Now</p>
                    <a href="../products-sidebar-fullwidth.html" class="default-btn">Discover Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Offer Area -->

<!-- Start Products Area -->
<section class="products-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Popular Products</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box">
                    <div class="products-image">
                        <a href="../main/products-type-1.html">
                            <img src="assets/img/products/prod-oro1.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/prod-oro1.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="new-tag">New!</div>
                    </div>

                    <div class="products-content">
                        <span class="category">T-Shirt</span>
                        <h3><a href="../main/products-type-1.html">Tbmpoy Men's Tapered</a></h3>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            <span class="old-price">$321</span>
                            <span class="new-price">$250</span>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>

                    <span class="products-discount">
                                <span>
                                    20% OFF
                                </span>
                            </span>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box">
                    <div class="products-image">
                        <a href="../main/products-type-1.html">
                            <img src="assets/img/products/prod-fano-2.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/prod-fano-2.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <span class="category">T-Shirt</span>
                        <h3><a href="../main/products-type-1.html">Sunnyme Women's Ponchos</a></h3>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box">
                    <div class="products-image">
                        <a href="../main/products-type-1.html">
                            <img src="assets/img/products/prod-fano-3.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/prod-fano-3.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <span class="category">Shirt</span>
                        <h3><a href="../main/products-type-1.html">Open Front Knit Sweaters</a></h3>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Products Area -->

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

<!-- Start Products Area -->
<section class="products-area pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Best Selling Products</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box">
                    <div class="products-image">
                        <a href="../main/products-type-1.html">
                            <img src="assets/img/products/bestprod1.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/bestprod1.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="new-tag">New!</div>
                    </div>

                    <div class="products-content">
                        <span class="category">T-Shirt</span>
                        <h3><a href="../main/products-type-1.html">Sleeve Faux Suede Loose</a></h3>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            <span class="old-price">$321</span>
                            <span class="new-price">$250</span>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>

                    <span class="products-discount">
                                <span>
                                    20% OFF
                                </span>
                            </span>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box">
                    <div class="products-image">
                        <a href="../main/products-type-1.html">
                            <img src="assets/img/products/bestprod2.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/bestprod2.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <span class="category">T-Shirt</span>
                        <h3><a href="../main/products-type-1.html">T-Shirt Casual Stripe Tunic</a></h3>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="products-box">
                    <div class="products-image">
                        <a href="../main/products-type-1.html">
                            <img src="assets/img/products/bestprod3.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/bestprod3.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <span class="category">Shirt</span>
                        <h3><a href="../main/products-type-1.html">Chest Cutout Tunics Long</a></h3>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Products Area -->

<!-- Start Brand Area -->
<div class="brand-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>Shop By Brand</h2>
        </div>

        <div class="brand-slides owl-carousel owl-theme">
            <div class="brand-item">
                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/brand/shopbybrand1.jpg" alt="image"></a>
            </div>

            <div class="brand-item">
                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/brand/shopbybrand2.jpg" alt="image"></a>
            </div>

            <div class="brand-item">
                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/brand/shopbybrand3.jpg" alt="image"></a>
            </div>

            <div class="brand-item">
                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/brand/shopbybrand4.jpg" alt="image"></a>
            </div>

            <div class="brand-item">
                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/brand/shopbybrand5.jpg" alt="image"></a>
            </div>

            <div class="brand-item">
                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/brand/shopbybrand6.jpg" alt="image"></a>
            </div>
        </div>
    </div>
</div>
<!-- End Brand Area -->

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Recent Story</span>
            <h2>From Our Courses</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="../blog-1.html">
                            <img src="assets/img/course-1.jpg" alt="image">
                        </a>
                        <div class="date">
                            <span>January 29, 2021</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <span class="category">Ideas</span>
                        <h3><a href="../blog-1.html">The new hairstyles to grow your business</a></h3>
                        <a href="../blog-1.html" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="../blog-1.html">
                            <img src="assets/img/course-2.jpg" alt="image">
                        </a>
                        <div class="date">
                            <span>January 29, 2021</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <span class="category">Advice</span>
                        <h3><a href="../blog-1.html">Latest trends</a></h3>
                        <a href="../blog-1.html" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="../blog-1.html">
                            <img src="assets/img/course-3.jpg" alt="image">
                        </a>
                        <div class="date">
                            <span>January 29, 2021</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <span class="category">Social</span>
                        <h3><a href="../blog-1.html">Advanced hairstylist's</a></h3>
                        <a href="../blog-1.html" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

<!-- Start Instagram Area -->
<div class="instagram-area">
    <div class="container-fluid">
        <div class="instagram-title">
            <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank"><i class='bx bxl-instagram'></i> Follow us on @tessa</a>
        </div>

        <div class="instagram-slides owl-carousel owl-theme">
            <div class="single-instagram-post">
                <img src="assets/img/instagram/foto1.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/foto2.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/foto3.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/foto4.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/foto5.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/foto6.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/foto7.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/foto1.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/foto2.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/tessabeauty.institute/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/foto3.jpg" alt="image">
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
                            <a href="#"><img src="assets/img/produkt prova-01.png" alt="image"></a>
                        </li>

                        <li>
                            <a href="#"><img src="assets/img/produkt prova 2-01.png" alt="image"></a>
                        </li>

                        <li>
                            <a href="#"><img src="assets/img/produkt prova 3-01.png" alt="image"></a>
                        </li>

                        <li>
                            <a href="#"><img src="assets/img/produkt prova 4-01.png" alt="image"></a>
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

<!-- Start QuickView Modal Area -->
<div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="products-image">
                        <img src="assets/img/quick-view-img.jpg" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="products-content">
                        <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>

                        <div class="price">
                            <span class="old-price">$210.00</span>
                            <span class="new-price">$200.00</span>
                        </div>

                        <div class="products-review">
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="#" class="rating-count">3 reviews</a>
                        </div>

                        <ul class="products-info">
                            <li><span>Vendor:</span> <a href="#">Lereve</a></li>
                            <li><span>Availability:</span> <a href="#">In stock (7 items)</a></li>
                            <li><span>Products Type:</span> <a href="#">T-Shirt</a></li>
                        </ul>

                        <div class="products-color-switch">
                            <h4>Color:</h4>

                            <ul>
                                <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Black" class="color-black"></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="White" class="color-white"></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Green" class="color-green"></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Yellow Green" class="color-yellowgreen"></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Teal" class="color-teal"></a></li>
                            </ul>
                        </div>

                        <div class="products-size-wrapper">
                            <h4>Size:</h4>

                            <ul>
                                <li><a href="#">XS</a></li>
                                <li class="active"><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">XL</a></li>
                                <li><a href="#">XXL</a></li>
                            </ul>
                        </div>

                        <div class="products-add-to-cart">
                            <div class="input-counter">
                                <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                <input type="text" value="1">
                                <span class="plus-btn"><i class='bx bx-plus'></i></span>
                            </div>

                            <button type="submit" class="default-btn">Add to Cart</button>
                        </div>

                        <a href="#" class="view-full-info">View Full Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End QuickView Modal Area -->

<!-- Start Shopping Cart Modal -->
<div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>

            <div class="modal-body">
                <h3>My Cart (3)</h3>

                <div class="products-cart-content">
                    <div class="products-cart">
                        <div class="products-image">
                            <a href="#"><img src="assets/img/products/img1.jpg" alt="image"></a>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>
                            <span>Blue / XS</span>
                            <div class="products-price">
                                <span class="qnt-element">1</span>
                                <span>x</span>
                                <span class="price">$250.00</span>
                            </div>
                            <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>
                    </div>

                    <div class="products-cart">
                        <div class="products-image">
                            <a href="#"><img src="assets/img/products/img2.jpg" alt="image"></a>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                            <span>Blue / XS</span>
                            <div class="products-price">
                                <span>1</span>
                                <span>x</span>
                                <span class="price">$200.00</span>
                            </div>
                            <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>
                    </div>

                    <div class="products-cart">
                        <div class="products-image">
                            <a href="#"><img src="assets/img/products/img3.jpg" alt="image"></a>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Hanes Men's Pullover</a></h3>
                            <span>Blue / XS</span>
                            <div class="products-price">
                                <span>1</span>
                                <span>x</span>
                                <span class="price">$200.00</span>
                            </div>
                            <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>
                    </div>
                </div>

                <div class="products-cart-subtotal">
                    <span>Subtotal</span>

                    <span class="subtotal">$524.00</span>
                </div>

                <div class="products-cart-btn">
                    <a href="../checkout.html" class="default-btn">Proceed to Checkout</a>
                    <a href="../cart.html" class="optional-btn">View Shopping Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shopping Cart Modal -->

<!-- Start Wishlist Modal -->
<div class="modal right fade shoppingWishlistModal" id="shoppingWishlistModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>

            <div class="modal-body">
                <h3>My Wish List (3)</h3>

                <div class="products-cart-content">
                    <div class="products-cart">
                        <div class="products-image">
                            <a href="#"><img src="assets/img/products/img1.jpg" alt="image"></a>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Long Sleeve Leopard T-Shirt</a></h3>
                            <span>Blue / XS</span>
                            <div class="products-price">
                                <span>1</span>
                                <span>x</span>
                                <span class="price">$250.00</span>
                            </div>
                            <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>
                    </div>

                    <div class="products-cart">
                        <div class="products-image">
                            <a href="#"><img src="assets/img/products/img2.jpg" alt="image"></a>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                            <span>Blue / XS</span>
                            <div class="products-price">
                                <span>1</span>
                                <span>x</span>
                                <span class="price">$200.00</span>
                            </div>
                            <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>
                    </div>

                    <div class="products-cart">
                        <div class="products-image">
                            <a href="#"><img src="assets/img/products/img3.jpg" alt="image"></a>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Hanes Men's Pullover</a></h3>
                            <span>Blue / XS</span>
                            <div class="products-price">
                                <span>1</span>
                                <span>x</span>
                                <span class="price">$200.00</span>
                            </div>
                            <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>
                    </div>
                </div>

                <div class="products-cart-btn">
                    <a href="../cart.html" class="optional-btn">View Shopping Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Wishlist Modal -->



<!-- Start Shipping Modal Area -->
<div class="modal fade productsShippingModal" id="productsShippingModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>

            <div class="shipping-content">
                <h3>Shipping</h3>
                <ul>
                    <li>Complimentary ground shipping within 1 to 7 business days</li>
                    <li>In-store collection available within 1 to 7 business days</li>
                    <li>Next-day and Express delivery options also available</li>
                    <li>Purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of certain items</li>
                    <li>See the delivery FAQs for details on shipping methods, costs and delivery times</li>
                </ul>

                <h3>Returns and Exchanges</h3>
                <ul>
                    <li>Easy and complimentary, within 14 days</li>
                    <li>See conditions and procedure in our return FAQs</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Shipping Modal Area -->

<!-- Start Products Filter Modal Area -->
<div class="modal left fade productsFilterModal" id="productsFilterModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i> Close</span>
            </button>

            <div class="modal-body">
                <div class="woocommerce-widget-area">
                    <div class="woocommerce-widget filter-list-widget">
                        <h3 class="woocommerce-widget-title">Current Selection</h3>

                        <div class="selected-filters-wrap-list">
                            <ul>
                                <li><a href="#"><i class='bx bx-x'></i> 44</a></li>
                                <li><a href="#"><i class='bx bx-x'></i> XI</a></li>
                                <li><a href="#"><i class='bx bx-x'></i> Clothing</a></li>
                                <li><a href="#"><i class='bx bx-x'></i> Shoes</a></li>
                            </ul>

                            <a href="#" class="delete-selected-filters"><i class='bx bx-trash'></i> <span>Clear All</span></a>
                        </div>
                    </div>

                    <div class="woocommerce-widget collections-list-widget">
                        <h3 class="woocommerce-widget-title">Collections</h3>

                        <ul class="collections-list-row">
                            <li><a href="#">Men's</a></li>
                            <li class="active"><a href="#" class="active">Women’s</a></li>
                            <li><a href="#">Clothing</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Uncategorized</a></li>
                        </ul>
                    </div>

                    <div class="woocommerce-widget price-list-widget">
                        <h3 class="woocommerce-widget-title">Price</h3>

                        <div class="collection-filter-by-price">
                            <input class="js-range-of-price" type="text" data-min="0" data-max="1055" name="filter_by_price" data-step="10">
                        </div>
                    </div>

                    <div class="woocommerce-widget size-list-widget">
                        <h3 class="woocommerce-widget-title">Size</h3>

                        <ul class="size-list-row">
                            <li><a href="#">20</a></li>
                            <li><a href="#">24</a></li>
                            <li class="active"><a href="#">36</a></li>
                            <li><a href="#">30</a></li>
                            <li><a href="#">XS</a></li>
                            <li><a href="#">S</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">L</a></li>
                            <li><a href="#">L</a></li>
                            <li><a href="#">XL</a></li>
                        </ul>
                    </div>

                    <div class="woocommerce-widget color-list-widget">
                        <h3 class="woocommerce-widget-title">Color</h3>

                        <ul class="color-list-row">
                            <li class="active"><a href="#" title="Black" class="color-black"></a></li>
                            <li><a href="#" title="Red" class="color-red"></a></li>
                            <li><a href="#" title="Yellow" class="color-yellow"></a></li>
                            <li><a href="#" title="White" class="color-white"></a></li>
                            <li><a href="#" title="Blue" class="color-blue"></a></li>
                            <li><a href="#" title="Green" class="color-green"></a></li>
                            <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>
                            <li><a href="#" title="Pink" class="color-pink"></a></li>
                            <li><a href="#" title="Violet" class="color-violet"></a></li>
                            <li><a href="#" title="Blue Violet" class="color-blueviolet"></a></li>
                            <li><a href="#" title="Lime" class="color-lime"></a></li>
                            <li><a href="#" title="Plum" class="color-plum"></a></li>
                            <li><a href="#" title="Teal" class="color-teal"></a></li>
                        </ul>
                    </div>

                    <div class="woocommerce-widget brands-list-widget">
                        <h3 class="woocommerce-widget-title">Brands</h3>

                        <ul class="brands-list-row">
                            <li><a href="#">Gucci</a></li>
                            <li><a href="#">Virgil Abloh</a></li>
                            <li><a href="#">Balenciaga</a></li>
                            <li class="active"><a href="#">Moncler</a></li>
                            <li><a href="#">Fendi</a></li>
                            <li><a href="#">Versace</a></li>
                        </ul>
                    </div>

                    <div class="woocommerce-widget aside-trending-widget">
                        <div class="aside-trending-products">
                            <img src="assets/img/offer-bg.jpg" alt="image">

                            <div class="category">
                                <h3>Top Trending</h3>
                                <span>Spring/Summer 2021 Collection</span>
                            </div>
                            <a href="#" class="link-btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products Filter Modal Area -->

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
                        <li><a href="../index-2.html">Home</a></li>
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
                        <li><a href="../main/login.html">My Account</a></li>
                        <li><a href="../checkout.html">Checkout</a></li>
                        <li><a href="../cart.html">Cart</a></li>
                        <li><a href="../main/track-order.html">Order Tracking</a></li>
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

                            <img src="assets/img/payment/visa.png" alt="image"
                            />
                        </li>
                        <li>

                            <img src="assets/img/payment/mastercard.png" alt="image"
                            />
                        </li>
                        <li>

                            <img src="assets/img/payment/mastercard2.png" alt="image"
                            />
                        </li>
                        <li>

                            <img src="assets/img/payment/visa2.png" alt="image"
                            />
                        </li>
                        <li>

                            <img src="assets/img/payment/expresscard.png" alt="image"
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/rangeSlider.min.js"></script>
<script src="assets/js/nice-select.min.js"></script>
<script src="assets/js/meanmenu.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/sticky-sidebar.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/ajaxchimp.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
