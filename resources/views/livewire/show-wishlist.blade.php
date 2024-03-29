<div>
    <div class="cart-table table-responsive">
        <table class="table table-bordered table-style">
            <thead>
            <tr>
                <th scope="col">{{__('messages.Delete')}}</th>
                <th scope="col">{{__('messages.Product')}}</th>
                <th scope="col">{{__('messages.Brand')}}</th>
                <th scope="col">{{__('messages.Category')}}</th>
                <th scope="col">{{__('messages.Name')}}</th>

                <th scope="col">{{__('messages.UnitPrice')}}</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($items as $item)
                <tr >
                    <td class="product-action">
                        <div wire:loading.remove="deleteItem({{$item->id}}"> <!-- Only show when deleting -->
                            <button wire:click.prevent="deleteItem({{ $item->id }})" class="remove">
                                <i class="bx bx-trash deleteCartitem"></i>
                            </button>
                        </div>
                    </td>

                    <td class="product-thumbnail">
                        <a href="{{route('showProduct',$item->product->id )}}">
                            <img src="{{ asset('storage/images/' . $item->product->image->name) }}" alt="item">
                        </a>
                    </td>

                    <td class="product-name">
                        <span class="unit-amount" >{{$item->product->brand->name}}</span>
                    </td>
                    <td class="product-name">
                        <span class="unit-amount" >{{$item->product->category->name}}</span>
                    </td>
                    <td class="product-name">
                        <span class="unit-amount" >{{ $item->product->name }}</span>
                    </td>


                    <td class="product-price">
                            @if(auth()->check() && auth()->user()->role == 2)
                                <span class="new-price">{{ $item->product->stylist_price }}{{__('messages.den')}}</span>
                            @elseif($item->product->sale()->active()->exists())
                                <span class="old-price">${{ $item->product->price }}{{__('messages.den')}}</span>
                                <span class="new-price">${{ $item->product->sale->sale_price }}{{__('messages.den')}}</span>
                            @else
                                <span class="new-price">{{ $item->product->price }}{{__('messages.den')}}</span>
                            @endif
                    </td>
                    <td class="product-price">
                        <input type="hidden" value="{{$item->product->id}}" class="prod_id">
                        @livewire('add-to-cart', ['product_id' => $item->product->id])
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <style>
            @media only screen and (max-width: 768px) {

                /* Custom labels for each column based on its index */
                .table-responsive td:nth-of-type(1):before { content: "{{__('messages.Delete')}}"; }
                .table-responsive td:nth-of-type(3):before { content: "{{__('messages.Brand')}}"; }
                .table-responsive td:nth-of-type(4):before { content: "{{__('messages.Category')}}"; }
                .table-responsive td:nth-of-type(5):before { content: "{{__('messages.name')}}"; }
                .table-responsive td:nth-of-type(6):before { content: "{{__('messages.UnitPrice')}}"; }

                /* Additional styling as needed */
            }
        </style>
    </div>
    <div class="cart-buttons">
        <div class="row align-items-center">
            <div class="col-lg-7 col-sm-7 col-md-7">
                <a href="#" class="optional-btn">{{__('messages.ContinueShopping')}}</a>
            </div>

            <div class="col-lg-5 col-sm-5 col-md-5 text-end">
                <a href="#" wire:click.prevent="clearWishlist" class="default-btn">{{__('messages.ClearWishlist')}}</a>
            </div>
        </div>
    </div>
</div>

