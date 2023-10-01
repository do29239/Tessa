<div>
    <style>


        .category {
            display: block;
            margin-bottom: 10px;
            text-transform: uppercase;
            color: #f53f85;
            font-weight: 600;
            font-size: 14px;
        }
        .sub-title {
            display: block;
            margin-bottom: 7px;
            font-size: 17.5px;

            color: black;
            font-weight: bold;
        }


    </style>
        <div id="products-collections-filter" class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-6 products-col-item">
                    <div class="single-products-box">
                        <div class="products-image">
                            <a href="{{ route('showProduct', $product->id) }}">
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
                                <button type="submit" class="default-btn">Add Cart</button>
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


    <!-- Start Products Filter Modal Area -->
    <div class="text-center">
        <div class="text-center" wire:loading>
            <button class="default-btn">Loading...</button>
        </div>

        <div class="text-center" wire:loading.remove>
            @if ($noMoreProducts)
                <span class="sub-title">No more products to be loaded!!!</span>
            @else
                <button wire:click="load" class="default-btn">Load More</button>
            @endif
        </div>
    </div>
</div>


