<div>
    <form wire:submit.prevent="placeOrder">
        <div class="col-lg-6 col-md-12">
            <div class="order-details">
                <h3 class="title">Your Order</h3>

                <div class="order-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cartItems as $cartItem)
                            <tr>
                                <td class="product-name">{{ $cartItem->name }}</td>
                                <td class="product-quantity">{{ $cartItem->quantity }}</td>
                                <td class="product-total">{{ $cartItem->price * $cartItem->quantity }} den</td>
                            </tr>
                        @endforeach

                        {{-- Dynamically show the coupon discount if applied --}}
                        @if($couponDiscount)
                            <tr>
                                <td colspan="2" class="text-right">Coupon Discount:</td>
                                <td>-{{ $couponDiscount }} den</td>
                            </tr>
                        @endif

                        {{-- Dynamically calculate and show the order total --}}
                        <tr>
                            <td colspan="2" class="text-right"><strong>Order Total:</strong></td>
                            <td>{{ $finalTotal }} den</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="payment-box">
            <div class="payment-method">
                <p>
                    <input type="radio" id="cash-on-delivery" wire:model="paymentMethod" value="cash_on_delivery">
                    <label for="cash-on-delivery">Cash on Delivery</label>
                </p>
            </div>

            <button type="submit" class="default-btn">Place Order</button>
        </div>
    </form>
</div>
