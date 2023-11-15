<div>

    <div class="cart-table table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Name</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
            </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $cartItem)

                    <tr wire:key="{{$cartItem->id}}">
                        <td class="product-thumbnail">
                            <a href="#">
                                <img src="{{ asset('storage/images/'.$cartItem->product->image->name) }}" alt="item" />
                            </a>
                        </td>

                        <td class="product-name">
                            <a href="#">{{ $cartItem->product->name }}</a>
                        </td>

                        <td class="product-price">
                            <span class="unit-amount">{{ number_format($cartItem->product->price, 2) }}</span>
                        </td>


                        <td class="product-quantity">
                            <div class="input-counter">
                                <span class="minus-btn" wire:click="decrementQuantity({{$cartItem->id}})"><i class="bx bx-minus updateCartItem" ></i></span>
                                <input type="text" min="1" value="{{$cartItem->quantity}}" />
                                <span class="plus-btn" wire:click="incrementQuantity({{$cartItem->id}})"><i class="bx bx-plus updateCartItem" ></i></span>
                            </div>
                        </td>


                        <td class="product-subtotal">
                            <span class="subtotal-amount">{{number_format($cartItem->total, 2) }}</span>

                            <div wire:loading.remove="deleteItem({{$cartItem->id}}"> <!-- Only show when deleting -->
                                <button wire:click.prevent="deleteItem({{ $cartItem->id }})" class="remove">
                                    <i class="bx bx-trash deleteCartitem"></i>
                                </button>
                            </div>
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
            <div class="cart-buttons">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-sm-7 col-md-7">
                        <a href="#" class="optional-btn">Continue Shopping</a>
                    </div>

                    <div class="col-lg-5 col-sm-5 col-md-5 text-end">
                        <a href="#" class="default-btn">Update Cart</a>
                    </div>
                </div>
            </div>

            <div class="cart-totals">
                <h3>Cart Totals</h3>

                <ul>
                    <li>Subtotal <span>{{number_format($Subtotal - 150, 2) }} den</span></li>
                    <li>Shipping <span>150.00 den</span></li>
                    <li>Total <span>{{number_format($Subtotal, 2) }} den</span></li>
                </ul>

                <a href="../checkout.html" class="default-btn">Proceed to Checkout</a>
            </div>

</div>