@extends('layouts.master')

@section('content')

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
                                <span class="sub-title">Products For All Your Needs</span>
                                <h1>New Inspiration!!! New Look!!!</h1>
                                <p>We ship All over Macedonia!!!</p>
                                <div class="btn-box">
                                    <a href="/shop" class="default-btn">Go To Shop</a>
                                    <a href="/courses" class="optional-btn">Our Courses</a>
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
                                <span class="sub-title">New Inspiration!!! New Look!!!</span>
                                <h1>Products For All Your Needs</h1>
                                <p>We ship All over Macedonia!!!</p>
                                <div class="btn-box">
                                    <a href="/shop" class="default-btn">Go To Shop</a>
                                    <a href="/courses" class="optional-btn">Our Courses</a>
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
                                <span class="sub-title">We ship All over Macedonia!!!</span>
                                <h1>All You Need in One Place</h1>
                                <p>New Inspiration!!! New Look!!!</p>
                                <div class="btn-box">
                                    <a href="/shop" class="default-btn">Go To Shop</a>
                                    <a href="/courses" class="optional-btn">Our Courses</a>
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
                    <img src="{{asset('assets/img/CategoriesBanner/orrossss1.jpg')}}" alt="image">

                    <div class="content">
                        <h3>New Collections!</h3>
                    </div>

                    <a href="{{url('/shop')}}" class="link-btn"></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="{{asset('assets/img/CategoriesBanner/Fanola color.jpg')}}" alt="image">

                            <div class="content">
                                <h3>Fanola Hair Colors</h3>
                            </div>

                            <a href="" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="{{asset('assets/img/CategoriesBanner/OroTherapy Color.jpg')}}" alt="image">

                            <div class="content">
                                <h3>Oro Hair Colors</h3>
                            </div>

                            <a href="" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="{{asset('assets/img/CategoriesBanner/RrLine Color.jpg')}}" alt="image">

                            <div class="content">
                                <h3>RR Hair Colors</h3>
                            </div>

                            <a href="" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="{{asset('assets/img/CategoriesBanner/No Yellow Color.jpg')}}" alt="image">

                            <div class="content">
                                <h3>No Yellow Color</h3>
                            </div>

                            <a href="" class="link-btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Categories Banner Area -->

<!-- Start Products Area -->
<style>

    .input-counter{
        padding-left: 20px;
    }
    .qty-input{

        max-width: 60px;
    }

    .input-counter {
        display: flex;
        align-items: center;
    }
    .btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: #ddd;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }
    .qty-input {
        width: 40px;
        height: 32px;
        text-align: center;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin: 0 10px;
    }

</style>

<section class="products-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Recent Products</h2>
        </div>

        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="products-box">
                        <div class="products-image">
                            <a href="{{ route('showProduct', $product->id) }}">
                                <img src="{{ asset('storage/images/'.$product->image->name) }}" class="main-image" alt="image">
                                <img src="{{ asset('storage/images/'.$product->image->name) }}" class="hover-image" alt="image">
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
                            <span class="category">{{$product->category->name}}</span>
                            <h3><a href="{{ route('showProduct', $product->id) }}">{{$product->name}}</a></h3>
                            <div class="price">
                                <span class="new-price">{{$product->price}}den</span>
                            </div>
                            <input type="hidden" value="{{$product->id}}" class="prod_id">
                            <div class="d-flex align-items-center" style="padding-top: 15px;">
                                <button type="submit" class="default-btn">
                                    <i class="fas fa-cart-plus"></i> Add to Cart
                                </button>
{{--                                test cart button--}}
                                <div class="input-counter">
                                    <span class="minus-btn"><i class="bx bx-minus"></i></span>
                                    <input type="text" class="qty-input" value="1" />
                                    <span class="plus-btn"><i class="bx bx-plus"></i></span>
                                </div>
                            </div>
                        </div>

                        <span class="products-discount">
                        <span>
                            20% OFF
                        </span>
                    </span>
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
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="products-box">
                        <div class="products-image">
                            <a href="../show-product.blade.php">
                                <img src="{{ asset('storage/images/'.$product->image->name) }}" class="main-image" alt="image">
                                <img src="{{ asset('storage/images/'.$product->image->name) }}" class="hover-image" alt="image">
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
                            <span class="category">{{$product->category->name}}</span>
                            <h3><a href="products-type-2.html">{{$product->name}}</a></h3>
                            <div class="price">
                                <span class="new-price">{{$product->price}}den</span>
                            </div>
                            <input type="hidden" value="{{$product->id}}" class="prod_id">
                            <div class="d-flex align-items-center" style="padding-top: 15px;">
                                <button type="submit" class="col-md-6 addToCartBtn mr-3">Add Cart</button>
                                <div class="input-counter">
                                    <span class="minus-btn"><i class="bx bx-minus"></i></span>
                                    <input type="text" class="qty-input" value="1" />
                                    <span class="plus-btn"><i class="bx bx-plus"></i></span>
                                </div>
                            </div>
                        </div>

                        <span class="products-discount">
                        <span>
                            20% OFF
                        </span>
                    </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- End Products Area -->



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
                        <a href="../show-product.blade.php">
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
                        <h3><a href="../show-product.blade.php">Sleeve Faux Suede Loose</a></h3>
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
                        <a href="../show-product.blade.php">
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
                        <h3><a href="../show-product.blade.php">T-Shirt Casual Stripe Tunic</a></h3>
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
                        <a href="../show-product.blade.php">
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
                        <h3><a href="../show-product.blade.php">Chest Cutout Tunics Long</a></h3>
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
@endsection
