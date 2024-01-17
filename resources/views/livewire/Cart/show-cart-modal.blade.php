<div class="modal-body">
    <h3>My Cart ({{ count($cartItems) }})</h3>

    <div class="products-cart-content">
        @foreach($cartItems as $cartItem)
            <div class="products-cart">
                <div class="products-image">
                    <a href="#"><img src="{{ asset('storage/images/'.$cartItem->product->image->name) }}" alt="image"></a>
                </div>

                <div class="products-content">
                    <h3><a href="#">{{ $cartItem->product->name }}</a></h3>
                    <div class="products-price">
                        <span class="qnt-element">{{ $cartItem->quantity }}</span>
                        <span>x</span>
                        <span class="price">
                            @if(auth()->check() && auth()->user()->role == 2)
                                {{ number_format($cartItem->product->stylist_price, 2) }} den
                            @else
                                {{ number_format($cartItem->product->price, 2) }} den
                            @endif
                        </span>
                    </div>
                    <div class="text-center" wire:loading>
                        <a class="remove-btn">Deleting...</a>
                    </div>
                    <div wire:loading.remove>
                        <a href="#" wire:click.prevent="deleteItem({{ $cartItem->id }})" class="remove-btn">
                            <i class="bx bx-trash deleteCartitem"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="products-cart-subtotal">
        <span>Subtotal</span>
        <span class="subtotal">
            {{ number_format($subtotal, 2) }} den
        </span>
    </div>

    <div class="products-cart-btn">
        @if (!$isEmpty)
            <a href="{{ route('Checkout') }}" class="default-btn">Proceed to Checkout</a>
            <a href="{{ route('Cart') }}" class="optional-btn">View Shopping Cart</a>
        @endif
    </div>
</div>
