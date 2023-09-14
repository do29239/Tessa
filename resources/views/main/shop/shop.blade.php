@extends('layouts.master')

@section('content')

<!-- Start Page Title -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Shop</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Shop</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Start Products Area -->
<section class="products-area products-collections-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="woocommerce-widget-area">
                    <div class="woocommerce-widget collections-list-widget">
                        <h3 class="woocommerce-widget-title">Categories</h3>

                        <ul class="collections-list-row">
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{route('productsByCategory', $category->id)}}"><span></span> {{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>


                    <div class="woocommerce-widget brands-list-widget">
                        <h3 class="woocommerce-widget-title">Brands</h3>

                        <ul class="brands-list-row">
                            @foreach($brands as $brand)
                                <li>
                                    <a href="{{ route('productsByBrand', $brand) }}"><span></span> {{$brand->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="woocommerce-widget aside-trending-widget">
                        <div class="aside-trending-products">
                            <img src="assets/img/offer-bg.jpg" alt="image" />

                            <div class="category">
                                <h3>Courses here</h3>
                                <span>Spring/Summer 2021 Collection</span>
                            </div>
                            <a href="#" class="link-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="products-filter-options">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4">
                            <div class="d-lg-flex d-md-flex align-items-center">
                    <span class="sub-title d-lg-none"
                    ><a
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#productsFilterModal"
                        ><i class="bx bx-filter-alt"></i> Filter</a
                        ></span
                    >

                                <span class="sub-title d-none d-lg-block d-md-block"
                                >View:</span
                                >

                                <div class="view-list-row d-none d-lg-block d-md-block">
                                    <div class="view-column">
                                        <a href="#" class="icon-view-two">
                                            <span></span>
                                            <span></span>
                                        </a>

                                        <a href="#" class="icon-view-three active">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>

                                        <a href="#" class="icon-view-four">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>

                                        <a href="#" class="view-grid-switch">
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <p>Showing 1 – 18 of 100</p>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="products-ordering-list">
                                <select>
                                    <option>Sort by Price: Low to High</option>
                                    <option>Default Sorting</option>
                                    <option>Sort by Popularity</option>
                                    <option>Sort by Average Rating</option>
                                    <option>Sort by Latest</option>
                                    <option>Sort by Price: High to Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="products-collections-filter" class="row">
                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6 products-col-item">
                            <div class="single-products-box">
                                <div class="products-image">
                                    <a href="#">
                                        <img src="{{ asset('storage/images/'.$product->image->name) }}" class="main-image" alt="image" />
                                        <img src="{{ asset('storage/images/'.$product->image->name) }}" class="hover-image" alt="image" />
                                    </a>

                                    <div class="products-button">
                                        <ul>
                                            <li>
                                                <div class="wishlist-btn">z
                                                    <a href="#">
                                                        <i class="bx bx-heart"></i>
                                                        <span class="tooltip-label">Add to Wishlist</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="quick-view-btn">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                        <i class="bx bx-search-alt"></i>
                                                        <span class="tooltip-label">Quick View</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="products-content">
                                    <span class="category">{{$product->category->name}}</span>
                                    <h3><a href="#">{{ $product->name }}</a></h3>
                                    <div class="price">
                                        <span class="new-price">{{ $product->price }}den</span>
                                    </div>
                                    <input type="hidden" value="{{ $product->id }}" class="prod_id">
                                    <div class="d-flex align-items-center" style="padding-top: 15px;">
                                        <button type="submit" class="col-md-6 addToCartBtn mr-3">Add Cart</button>
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class="bx bx-minus"></i></span>
                                            <input type="text" class="qty-input" value="1" />
                                            <span class="plus-btn"><i class="bx bx-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                </div>


                <div class="pagination-area text-center">
                    <a href="#" class="prev page-numbers"
                    ><i class="bx bx-chevron-left"></i
                        ></a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">4</a>
                    <a href="#" class="page-numbers">5</a>
                    <a href="#" class="next page-numbers"
                    ><i class="bx bx-chevron-right"></i
                        ></a>
                </div>
            </div>
        </div>
    </div>
</section>
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
<!-- End Products Area -->


<!-- Start QuickView Modal Area -->
<div
    class="modal fade productsQuickView"
    id="productsQuickView"
    tabindex="-1"
    role="dialog"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button
                type="button"
                class="close"
                data-bs-dismiss="modal"
                aria-label="Close"
            >
                <span aria-hidden="true"><i class="bx bx-x"></i></span>
            </button>

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="products-image">
                        <img src="assets/img/quick-view-img.jpg" alt="image" />
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
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                            <a href="#" class="rating-count">3 reviews</a>
                        </div>

                        <ul class="products-info">
                            <li><span>Vendor:</span> <a href="#">Lereve</a></li>
                            <li>
                                <span>Availability:</span>
                                <a href="#">In stock (7 items)</a>
                            </li>
                            <li><span>Products Type:</span> <a href="#">T-Shirt</a></li>
                        </ul>

                        <div class="products-color-switch">
                            <h4>Color:</h4>

                            <ul>
                                <li>
                                    <a
                                        href="#"
                                        data-bs-toggle="tooltip"
                                        data-placement="top"
                                        title="Black"
                                        class="color-black"
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-bs-toggle="tooltip"
                                        data-placement="top"
                                        title="White"
                                        class="color-white"
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-bs-toggle="tooltip"
                                        data-placement="top"
                                        title="Green"
                                        class="color-green"
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-bs-toggle="tooltip"
                                        data-placement="top"
                                        title="Yellow Green"
                                        class="color-yellowgreen"
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        data-bs-toggle="tooltip"
                                        data-placement="top"
                                        title="Teal"
                                        class="color-teal"
                                    ></a>
                                </li>
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
                                <span class="minus-btn"><i class="bx bx-minus"></i></span>
                                <input type="text" value="1" />
                                <span class="plus-btn"><i class="bx bx-plus"></i></span>
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


<!-- Start Products Filter Modal Area -->
<span class="text-center">
                {{ $products->links('main.shop.my-paginate') }}
              </span>
@endsection
