@extends('layouts.master')

@section('content')

<!-- Start Main Banner Area -->
{{--<div class="home-slides-two owl-carousel owl-theme">--}}
{{--    <div class="main-banner banner-bg2">--}}
{{--        <div class="d-table">--}}
{{--            <div class="d-table-cell">--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6 col-md-12">--}}
{{--                            <div class="banner-content text-white">--}}
{{--                                <div class="line"></div>--}}
{{--                                <span class="sub-title">Products For All Your Needs</span>--}}
{{--                                <h1>New Inspiration!!! New Look!!!</h1>--}}
{{--                                <p>We ship All over Macedonia!!!</p>--}}
{{--                                <div class="btn-box">--}}
{{--                                    <a href="/shop" class="default-btn">Go To Shop</a>--}}
{{--                                    <a href="/courses" class="optional-btn">Our Courses</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="main-banner banner-bg4">--}}
{{--        <div class="d-table">--}}
{{--            <div class="d-table-cell">--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6 col-md-12">--}}
{{--                            <div class="banner-content text-white">--}}
{{--                                <div class="line"></div>--}}
{{--                                <span class="sub-title">New Inspiration!!! New Look!!!</span>--}}
{{--                                <h1>Products For All Your Needs</h1>--}}
{{--                                <p>We ship All over Macedonia!!!</p>--}}
{{--                                <div class="btn-box">--}}
{{--                                    <a href="/shop" class="default-btn">Go To Shop</a>--}}
{{--                                    <a href="/courses" class="optional-btn">Our Courses</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="main-banner banner-bg5">--}}
{{--        <div class="d-table">--}}
{{--            <div class="d-table-cell">--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6 col-md-12">--}}
{{--                            <div class="banner-content text-white">--}}
{{--                                <div class="line"></div>--}}
{{--                                <span class="sub-title">We ship All over Macedonia!!!</span>--}}
{{--                                <h1>All You Need in One Place</h1>--}}
{{--                                <p>New Inspiration!!! New Look!!!</p>--}}
{{--                                <div class="btn-box">--}}
{{--                                    <a href="/shop" class="default-btn">Go To Shop</a>--}}
{{--                                    <a href="/courses" class="optional-btn">Our Courses</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End Main Banner Area -->
{{--<div class="main-banner">--}}
{{--    <div class="split-slideshow">--}}
{{--        <div class="slideshow">--}}
{{--            <div class="slider">--}}
{{--                <div class="item">--}}
{{--                    <img src="{{url('../../assets/img/redhairr.webp')}}" />--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <img src="{{url('../../assets/img/webp/blackandwhite.webp')}}" />--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <img src="{{url('../../assets/img/webp/brownhair.webp')}}" />--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="slideshow-text">--}}
{{--            <div class="item">Canyon</div>--}}
{{--            <div class="item">Desert</div>--}}
{{--            <div class="item">Erosion</div>--}}
{{--            <div class="item">Shape</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="carousel">
    <div class="carousel-background">

    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{url('../../assets/img/webp/blackandwhite.webp')}}" alt="Item 1">
            <div class="banner-content text-white">
                <div class="line"></div>
                <span class="sub-title">{{__('messages.ShipAlloverMk')}}</span>
                <h1>{{__('messages.AllInOne')}}</h1>
                <p>{{__('messages.NewInspiration')}}</p>
                <div class="btn-box">
                    <a href="/shop" class="default-btn">{{__('messages.GoShop')}}</a>
                    <a href="/courses" class="optional-btn">{{__('messages.OurCourses')}}</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{url('../../assets/img/redhairr.webp')}}" alt="Item 2">
            <div class="banner-content text-white">
                <div class="line"></div>
                <span class="sub-title">{{__('messages.ShipAlloverMk')}}</span>
                <h1>{{__('messages.AllInOne')}}</h1>
                <p>{{__('messages.NewInspiration')}}</p>
                <div class="btn-box">
                    <a href="/shop" class="default-btn">{{__('messages.GoShop')}}</a>
                    <a href="/courses" class="optional-btn">{{__('messages.OurCourses')}}</a>
                </div>
            </div>
        </div>
        <!-- Add more items here -->
    </div>
    <a class="carousel-control prev" onclick="moveToPrevSlide()">&#10094;</a>
    <a class="carousel-control next" onclick="moveToNextSlide()">&#10095;</a>
</div>





<!-- Start Categories Banner Area -->
<section class="categories-banner-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="categories-box">
                    <img src="{{asset('assets/img/webp/orrossss1.webp')}}" alt="image" height="608.19" width="927.5">

                    <div class="content">
                        <h3>{{__('messages.ProdOnSale')}}</h3>
                    </div>

                    <a href="{{route('sales')}}" class="link-btn"></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="{{asset('assets/img/webp/Fanola color.webp')}}" alt="image" height="289.31" width="451.75">

                            <div class="content">
                                <h3>{{__('messages.FColor')}}</h3>
                            </div>

                            <a href="{{route('hair.colors','Fanola')}}" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="{{asset('assets/img/webp/OroTherapy Color.webp')}}" alt="image" height="289.31" width="451.75">

                            <div class="content">
                                <h3>{{__('messages.OColor')}}</h3>
                            </div>

                            <a href="{{route('hair.colors', 'Oro Therapy')}}" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="{{asset('assets/img/webp/RrLine Color.webp')}}" alt="image" height="289.31" width="451.75">

                            <div class="content">
                                <h3>{{__('messages.RRColor')}}</h3>
                            </div>

                            <a href="{{route('hair.colors', 'RrLine')}}" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="{{asset('assets/img/webp/No Yellow Color.webp')}}" alt="image" height="289.31" width="451.75">

                            <div class="content">
                                <h3>{{__('messages.NYColor')}}</h3>
                            </div>

                            <a href="{{route('hair.colors', 'No Yellow')}}" class="link-btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Categories Banner Area -->

<!-- Start Products Area -->


<section class="products-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">{{__('messages.SeeCollection')}}</span>
            <h2>{{__('messages.RecentProducts')}}</h2>
        </div>

        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="products-box">
                        <div class="products-image">
                            <a href="{{ route('showProduct', $product->id) }}">
                                <img src="{{ asset('storage/images/'.$product->image->name) }}" class="main-image" alt="image" width="416" height="496.7">
                                <img src="{{ asset('storage/images/'.$product->image->name) }}" class="hover-image" alt="image" width="416" height="496.7">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        @livewire('wishlist', ['product_id' => $product->id])
                                    </li>

                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">{{__('messages.quick_view')}}</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content">
                            <span class="category">{{$product->category->name}}</span>
                            <h3><a href="{{ route('showProduct', $product->id) }}">{{$product->brand->name. '   ' .$product->name}}</a></h3>
                            <div class="price">
                                @if(auth()->check() && auth()->user()->role == 2)
                                    <span class="new-price">{{ $product->stylist_price }}den</span>
                                @elseif($product->sale()->active()->exists())
                                    <span class="old-price">${{ $product->price }}</span>
                                    <span class="new-price">${{ $product->sale->sale_price }}</span>
                                @else
                                    <span class="new-price">{{ $product->price }}den</span>
                                @endif
                            </div>
                            <input type="hidden" value="{{$product->id}}" class="prod_id">
                            @livewire('add-to-cart', ['product_id' => $product->id])
                        </div>
                        @if($product->sale()->active()->exists())
                        <span class="products-discount">
                            <span>
                                {{__('messages.sale')}}
                            </span>
                        </span>
                        @endif
                    </div>
                </div>
            @endforeach
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
                    <span class="sub-title">{{__('messages.limited_time_offer')}}</span>
                    <h2>{{__('messages.products_in_sale')}}</h2>
                    <p>{{__('messages.best_deals')}}</p>
                    <a href="/sale" class="default-btn">{{__('messages.go_to_sale')}}</a>
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
            <span class="sub-title">{{__('messages.most_popular')}}</span>
            <h2>{{__('messages.popular_products')}}</h2>
        </div>

        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-6" wire:key="{{$product->id}}">
                    <div class="products-box">
                        <div class="products-image">
                            <a href="{{ route('showProduct', $product->id) }}">
                                <img src="{{ asset('storage/images/'.$product->image->name) }}" class="main-image" alt="image" width="416" height="496.7">
                                <img src="{{ asset('storage/images/'.$product->image->name) }}" class="hover-image" alt="image" width="416" height="496.7">
                            </a>

                            <div class="products-button">
                                <ul>
                                    <li>
                                        @livewire('wishlist', ['product_id' => $product->id])
                                    </li>

                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">{{__('messages.quick_view')}}</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content">
                            <span class="category">{{$product->category->name}}</span>
                            <h3><a href="products-type-2.html">{{$product->name}}</a></h3>
                            <div class="price">
                                @if(auth()->check() && auth()->user()->role == 2)
                                    <span class="new-price">{{ $product->stylist_price }}den</span>
                                @elseif($product->sale()->active()->exists())
                                    <span class="old-price">${{ $product->price }}</span>
                                    <span class="new-price">${{ $product->sale->sale_price }}</span>
                                @else
                                    <span class="new-price">{{ $product->price }}den</span>
                                @endif
                            </div>
                            <input type="hidden" value="{{$product->id}}" class="prod_id">
                            @livewire('add-to-cart', ['product_id' => $product->id])
                        </div>

                        @if($product->sale()->active()->exists())
                            <span class="products-discount">
                            <span>
                                Sale!
                            </span>
                        </span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


{{--<!-- End Products Area -->--}}



{{--<!-- Start Products Area -->--}}
{{--<section class="products-area pb-70">--}}
{{--    <div class="container">--}}
{{--        <div class="section-title">--}}
{{--            <span class="sub-title">See Our Collection</span>--}}
{{--            <h2>Best Selling Products</h2>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                <div class="products-box">--}}
{{--                    <div class="products-image">--}}
{{--                        <a href="../show-product.blade.php">--}}
{{--                            <img src="assets/img/products/bestprod1.jpg" class="main-image" alt="image">--}}
{{--                            <img src="assets/img/products/bestprod1.jpg" class="hover-image" alt="image">--}}
{{--                        </a>--}}

{{--                        <div class="products-button">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    @livewire('wishlist', ['product_id' => $product->id])--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <div class="quick-view-btn">--}}
{{--                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">--}}
{{--                                            <i class='bx bx-search-alt'></i>--}}
{{--                                            <span class="tooltip-label">Quick View</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="new-tag">New!</div>--}}
{{--                    </div>--}}

{{--                    <div class="products-content">--}}
{{--                        <span class="category">T-Shirt</span>--}}
{{--                        <h3><a href="../show-product.blade.php">Sleeve Faux Suede Loose</a></h3>--}}
{{--                        <div class="star-rating">--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                        </div>--}}
{{--                        <div class="price">--}}
{{--                            <span class="old-price">$321</span>--}}
{{--                            <span class="new-price">$250</span>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="add-to-cart">Add to Cart</a>--}}
{{--                    </div>--}}

{{--                    <span class="products-discount">--}}
{{--                                <span>--}}
{{--                                    20% OFF--}}
{{--                                </span>--}}
{{--                            </span>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                <div class="products-box">--}}
{{--                    <div class="products-image">--}}
{{--                        <a href="../show-product.blade.php">--}}
{{--                            <img src="assets/img/products/bestprod2.jpg" class="main-image" alt="image">--}}
{{--                            <img src="assets/img/products/bestprod2.jpg" class="hover-image" alt="image">--}}
{{--                        </a>--}}

{{--                        <div class="products-button">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    @livewire('wishlist', ['product_id' => $product->id])--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <div class="quick-view-btn">--}}
{{--                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">--}}
{{--                                            <i class='bx bx-search-alt'></i>--}}
{{--                                            <span class="tooltip-label">Quick View</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="products-content">--}}
{{--                        <span class="category">T-Shirt</span>--}}
{{--                        <h3><a href="../show-product.blade.php">T-Shirt Casual Stripe Tunic</a></h3>--}}
{{--                        <div class="star-rating">--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                        </div>--}}
{{--                        <div class="price">--}}
{{--                            <span class="old-price">$210</span>--}}
{{--                            <span class="new-price">$200</span>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="add-to-cart">Add to Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                <div class="products-box">--}}
{{--                    <div class="products-image">--}}
{{--                        <a href="../show-product.blade.php">--}}
{{--                            <img src="assets/img/products/bestprod3.jpg" class="main-image" alt="image">--}}
{{--                            <img src="assets/img/products/bestprod3.jpg" class="hover-image" alt="image">--}}
{{--                        </a>--}}

{{--                        <div class="products-button">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <div class="wishlist-btn">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class='bx bx-heart'></i>--}}
{{--                                            <span class="tooltip-label">Add to Wishlist</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <div class="quick-view-btn">--}}
{{--                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">--}}
{{--                                            <i class='bx bx-search-alt'></i>--}}
{{--                                            <span class="tooltip-label">Quick View</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="products-content">--}}
{{--                        <span class="category">Shirt</span>--}}
{{--                        <h3><a href="../show-product.blade.php">Chest Cutout Tunics Long</a></h3>--}}
{{--                        <div class="star-rating">--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                            <i class='bx bxs-star'></i>--}}
{{--                        </div>--}}
{{--                        <div class="price">--}}
{{--                            <span class="old-price">$210</span>--}}
{{--                            <span class="new-price">$200</span>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="add-to-cart">Add to Cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- End Products Area -->--}}

<!-- Start Brand Area -->
{{--<div class="brand-area ptb-70">--}}
{{--    <div class="container">--}}
{{--        <div class="section-title">--}}
{{--            <h2>Shop By Brand</h2>--}}
{{--        </div>--}}

{{--        <div class="brand-slides owl-carousel owl-theme">--}}
{{--            <div class="brand-item">--}}
{{--                <a href="{{route('shop.brand', 'RrLine')}}"><img src="assets/img/webp/shopbybrand1.webp" alt="image" width="144.14" height="144.14"></a>--}}
{{--            </div>--}}

{{--            <div class="brand-item">--}}
{{--                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/brand/shopbybrand2.jpg" alt="image" width="144.14" height="144.14"></a>--}}
{{--            </div>--}}

{{--            <div class="brand-item">--}}
{{--                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/webp/shopbybrand2.webp" alt="image" width="144.14" height="144.14"></a>--}}
{{--            </div>--}}

{{--            <div class="brand-item">--}}
{{--                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/webp/shopbybrand3.webp" alt="image" width="144.14" height="144.14"></a>--}}
{{--            </div>--}}

{{--            <div class="brand-item">--}}
{{--                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/webp/shopbybrand4.webp" alt="image"></a>--}}
{{--            </div>--}}

{{--            <div class="brand-item">--}}
{{--                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/webp/shopbybrand5.webp" alt="image"></a>--}}
{{--            </div>--}}

{{--            <div class="brand-item">--}}
{{--                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/webp/shopbybrand6.webp" alt="image"></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End Brand Area -->

<div class="brand-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>{{__('messages.ShopBrand')}}</h2>
        </div>

        <div class="brand-slides">
            <div class="brand-item active">
                <a href="{{route('shop.brand', 'RrLine')}}"><img src="assets/img/webp/shopbybrand1.webp" alt="image"></a>
            </div>
            <div class="brand-item">
                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/brand/shopbybrand2.jpg" alt="image"></a>
            </div>
            <div class="brand-item">
                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/webp/shopbybrand2.webp" alt="image"></a>
            </div>
            <div class="brand-item">
                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/webp/shopbybrand3.webp" alt="image"></a>
            </div>
            <div class="brand-item">
                <a href="../products-sidebar-fullwidth.html"><img src="assets/img/webp/shopbybrand3.webp" alt="image"></a>
            </div>
        </div>
    </div>
</div>

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">{{__('messages.recent_story')}}</span>
            <h2>{{__('messages.from_our_courses')}}</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="../blog-1.html">
                            <img src="assets/img/course-1.jpg" alt="image" width="416" height="320">
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
                            <img src="assets/img/course-2.jpg" alt="image" width="416" height="320">
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
                            <img src="assets/img/course-3.jpg" alt="image" width="416" height="320">
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
@endsection
