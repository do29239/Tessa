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
        @include('main.display-products')
    </div>

    <!-- Start Products Filter Modal Area -->
    <div class="text-center">
        <div class="text-center" wire:loading>
            <button class="default-btn load-more-btn">{{__('messages.Loading')}}</button>
        </div>

        <div class="text-center" wire:loading.remove>
            @if ($noMoreProducts)
                <span class="sub-title">{{__('messages.NoMoreProd')}}</span>
            @else
                <button wire:click="load" class="default-btn load-more-btn">{{__('messages.LoadMore')}}</button>
            @endif
        </div>
    </div>
</div>



