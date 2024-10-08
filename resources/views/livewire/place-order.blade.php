<form wire:submit.prevent="placeOrder">
        <div>
            <div class="order-details">
                <h3 class="title">{{__('messages.your_order')}}</h3>

                <div class="order-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">{{__('messages.product_name')}}</th>
                            <th scope="col">{{__('messages.Quantity')}}</th>
                            <th scope="col">{{__('messages.Total')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cartItems as $cartItem)
                            <tr>
                                <td class="product-name">{{ $cartItem->product->name }}</td>
                                <td class="product-quantity">{{ $cartItem->quantity }}</td>
                                <td class="product-total">{{ number_format($cartItem->price * $cartItem->quantity, 2) }} den</td>
                            </tr>
                        @endforeach

                        {{-- Dynamically show the coupon discount if applied --}}
                        @if($discount)
                            <tr>
                                <td colspan="2" class="text-right">{{__('messages.coupon_discount')}}</td>
                                <td>-{{ number_format($discount, 2) }} den</td>
                            </tr>
                        @endif

                        {{-- Dynamically calculate and show the order total --}}
                        <tr>
                            <td colspan="2" class="text-right"><strong>{{__('messages.Subtotal')}}</strong></td>
                            <td>{{ number_format($finalTotal - 150, 2)}} den</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-right"><strong>{{__('messages.Shipping')}}</strong></td>
                            <td>{{number_format(150,2)}} den</td>
                        </tr>

                        <tr>
                            <td colspan="2" class="text-right"><strong>{{__('messages.order_total_')}}</strong></td>
                            <td>{{ number_format($finalTotal, 2) }} den</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    @if(auth()->check() && auth()->user()->role == 2)
                    @livewire('apply-coupon')
                    @endif
                </div>
            </div>
        </div>

        <div class="payment-box">
            <div class="payment-method">
                <p>
                    <label for="cash-on-delivery">{{__('messages.cash_on_delivery')}}</label>
                </p>
            </div>

            <button type="submit" wire:model="placeOrder" class="default-btn">{{__('messages.place_order')}}</button>
        </div>
    </form>
