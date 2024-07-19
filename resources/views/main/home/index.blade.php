@extends('layouts.master')

@section('content')
<div class="carousel">

    <div class="carousel-inner">

        <div class="carousel-item active">
        <div class="overlay">
        </div>
            <img src="{{url('../../assets/img/banner.webp')}}" fetchpriority="high" loading="lazy" alt="Item 1">
            <div class="banner-content text-white">
                <span class="sub-title">{{__('messages.ShipAlloverMk')}}</span>
                <h1>{{__('messages.AllInOne')}}</h1>
                <p>{{__('messages.NewInspiration')}}</p>
                <div class="btn-box">
                    <a href="/shop" class="default-btn">{{__('messages.GoShop')}}</a>
                    <a href="/contact" class="optional-btn">{{__('messages.ContactUs')}}</a>
                </div>
            </div>
        </div>
    </div>

</div>





<!-- Start Categories Banner Area -->
<section class="categories-banner-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row">
            @auth
                @if(auth()->user()->role == 2)
                    <div class="col-lg-6 col-md-12">
                        <div class="categories-box">
                            <img src="{{ asset('assets/img/webp/orrossss1.webp') }}"  fetchpriority="high" alt="image" height="608.19" width="927.5">
                            <div class="content">
                                <h3>Go To Shop!</h3>
                            </div>
                            <a href="{{ route('shop') }}" class="link-btn"></a>
                        </div>
                    </div>
                @else
                    <div class="col-lg-6 col-md-12">
                        <div class="categories-box">
                            <img src="{{ asset('assets/img/webp/orrossss1.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                            <div class="content">
                                <h3>{{ __('messages.ProdOnSale') }}</h3>
                            </div>
                            <a href="{{ route('sales') }}" class="link-btn"></a>
                        </div>
                    </div>
                @endif
            @endauth

            @guest
                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/orrossss1.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>{{ __('messages.ProdOnSale') }}</h3>
                        </div>
                        <a href="{{ route('sales') }}" class="link-btn"></a>
                    </div>
                </div>
            @endguest

            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="{{ asset('assets/img/webp/fanola color.webp') }}" fetchpriority="high" alt="image" height="289.31" width="451.75">
                            <div class="content">
                                <h3>{{ __('messages.FColor') }}</h3>
                            </div>
                            <a href="{{ route('hair.colors', 'Fanola') }}" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="{{ asset('assets/img/webp/OroTherapy Color.webp') }}" fetchpriority="high" alt="image" height="289.31" width="451.75">
                            <div class="content">
                                <h3>{{ __('messages.OColor') }}</h3>
                            </div>
                            <a href="{{ route('hair.colors', 'Oro Therapy') }}" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="{{ asset('assets/img/webp/RrLine Color.webp') }}" fetchpriority="high" alt="image" height="289.31" width="451.75">
                            <div class="content">
                                <h3>{{ __('messages.RRColor') }}</h3>
                            </div>
                            <a href="{{ route('hair.colors', 'Rr Line') }}" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="categories-box">
                            <img src="{{ asset('assets/img/webp/No Yellow Color.webp') }}" fetchpriority="high" alt="image" height="289.31" width="451.75">
                            <div class="content">
                                <h3>{{ __('messages.NYColor') }}</h3>
                            </div>
                            <a href="{{ route('hair.colors', 'No Yellow Color') }}" class="link-btn"></a>
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
            @include('main.display-products')
        </div>
    </div>
</section>

<!-- End Products Area -->







<!-- Start Shop By Brand -->

<div class="brand-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>{{__('messages.ShopBrand')}}</h2>
        </div>

        <div class="brand-slides">
            <div class="brand-item">
                <a href="{{route('shop.brand', 'RrLine')}}"><img src="{{asset('assets/img/webp/rr.webp')}}" height="150" width="150" alt="image"></a>
            </div>
            <div class="brand-item">
                <a href="{{route('shop.brand', 'Fanola')}}"><img src="{{asset('assets/img/webp/fanola.webp')}}" height="150" width="150" alt="image"></a>
            </div>
            <div class="brand-item">
                <a href="{{route('shop.brand', 'No Yellow Color')}}"><img src="{{asset('assets/img/webp/noyellow.webp')}}" height="150" width="150" alt="image"></a>
            </div>
            <div class="brand-item">
                <a href="{{route('shop.brand', 'Oro Therapy')}}"><img src="{{asset('assets/img/webp/oro.webp')}}" height="150" width="150" alt="image"></a>
            </div>
        </div>
    </div>
</div>

<!-- End Shop By Brand -->


<!-- Start Products Area -->
<section class="products-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">{{__('messages.most_popular')}}</span>
            <h2>{{__('messages.popular_products')}}</h2>
        </div>
        <div class="row">
            @include('main.display-products', ['products' =>$popularProducts])
        </div>
    </div>
</section>
<style>
    /* Product Images */
    .products-image img {
        width: 100%;
        height: auto;
        max-width: 416px; /* Adjust this value based on your layout needs */
    }

    /* Product Box Layout Using Flexbox */
    .products-box {
        padding: 10px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Helps space out elements like images, details, and buttons */
    }

    /* Product Content Management */
    .products-content {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    /* Preventing Text Overflow */
    .products-content h3, .products-content .category {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Responsive Grid Adjustments */
    @media (max-width: 768px) {
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    @media (max-width: 576px) {
        .col-sm-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
    @media (min-width: 577px) and (max-width: 768px) {
        .products-box .default-btn {
            height: 40px; /* Set this height to what looks best in your design */
            padding: 5px 10px; /* Adjust padding if necessary to fit the button text */
            font-size: 12px; /* Optionally adjust the font size for smaller screens */
        }
    }
</style>



<!-- Start Blog Area -->
{{--<section class="blog-area pt-100 pb-70">--}}
{{--    <div class="container">--}}
{{--        <div class="section-title">--}}
{{--            <span class="sub-title">{{__('messages.recent_story')}}</span>--}}
{{--            <h2>{{__('messages.from_our_courses')}}</h2>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="single-blog-post">--}}
{{--                    <div class="post-image">--}}
{{--                        <a href="../blog-1.html">--}}
{{--                            <img src="assets/img/course-1.jpg" alt="image" width="416" height="320">--}}
{{--                        </a>--}}
{{--                        <div class="date">--}}
{{--                            <span>January 29, 2021</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="post-content">--}}
{{--                        <span class="category">Ideas</span>--}}
{{--                        <h3><a href="../blog-1.html">The new hairstyles to grow your business</a></h3>--}}
{{--                        <a href="../blog-1.html" class="details-btn">Read Story</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="single-blog-post">--}}
{{--                    <div class="post-image">--}}
{{--                        <a href="../blog-1.html">--}}
{{--                            <img src="assets/img/course-2.jpg" alt="image" width="416" height="320">--}}
{{--                        </a>--}}
{{--                        <div class="date">--}}
{{--                            <span>January 29, 2021</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="post-content">--}}
{{--                        <span class="category">Advice</span>--}}
{{--                        <h3><a href="../blog-1.html">Latest trends</a></h3>--}}
{{--                        <a href="../blog-1.html" class="details-btn">Read Story</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="single-blog-post">--}}
{{--                    <div class="post-image">--}}
{{--                        <a href="../blog-1.html">--}}
{{--                            <img src="assets/img/course-3.jpg" alt="image" width="416" height="320">--}}
{{--                        </a>--}}
{{--                        <div class="date">--}}
{{--                            <span>January 29, 2021</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="post-content">--}}
{{--                        <span class="category">Social</span>--}}
{{--                        <h3><a href="../blog-1.html">Advanced hairstylist's</a></h3>--}}
{{--                        <a href="../blog-1.html" class="details-btn">Read Story</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End Blog Area -->
@endsection
@section('scripts')
    @vite('resources/js/carousel.js')
@endsection
