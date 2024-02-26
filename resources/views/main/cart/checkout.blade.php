@extends('layouts.master')

@section('content')


    <!-- Start Checkout Area -->
<div class="checkout-area ptb-100">
    <div class="container">
        <div class="user-actions">
            <i class="bx bx-log-in"></i>
            <span
            >Returning customer?
            <a href="../login.blade.php">Click here to login</a></span
            >
        </div>

        <form action="{{url('place-order')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">Billing Details</h3>

                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Town / City <span class="required">*</span></label>
                                    <div class="select-box">
                                        <select class="form-control" >
                                            <option>{{ Auth::user()->city }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First Name <span class="required">*</span></label>
                                    <input type="text" name="first_name" value="{{ Auth::user()->first_name }}" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}" />
                                </div>
                            </div>

{{--    review thiss!!!!
                        <div class="col-lg-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Company Name</label>--}}
{{--                                    <input type="text" class="form-control" />--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}"/>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label
                                    >Postcode / Zip <span class="required">*</span></label
                                    >
                                    <input type="text" class="form-control" name="postcode" value="{{ Auth::user()->postcode }}" />
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label
                                    >Email Address <span class="required">*</span></label
                                    >
                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                        <td class="product-name">
                                            <a href="#">{{ $cartItem->product->name }}</a>
                                        </td>

                                        <td class="product-quantity">
                                            {{ $cartItem->quantity }}
                                        </td>

                                        <td class="product-total">
                                            <span class="subtotal-amount">{{ $cartItem->price * $cartItem->quantity }} den</span>
                                        </td>
                                    </tr>
                                @endforeach

                                @if(session('applied_coupon_discount'))
                                    <tr>
                                        <td class="discount-price">
                                            <span>Coupon Discount</span>
                                        </td>

                                        <td class="discount-price-quantity">
                                            <span>-</span>
                                        </td>

                                        <td class="discount-price-total">
                                            <span>-{{ session('applied_coupon_discount') }} den</span>
                                        </td>
                                    </tr>
                                @endif

                                {{-- Adjusted Order Total Row --}}
                                <tr>
                                    <td class="total-price">
                                        <span>Order Total</span>
                                    </td>

                                    <td class="product-subtotal">
                                        <span>-</span>
                                    </td>

                                    <td class="subtotal-amount">
                                        @php
                                            $finalTotal = $total + 150; // Assuming 150 is the shipping cost
                                            if (session()->has('applied_coupon_discount')) {
                                                $finalTotal -= session('applied_coupon_discount');
                                            }
                                        @endphp
                                        <span class="subtotal-amount">{{ $finalTotal }} den</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="payment-box">
                            <div class="payment-method">
                                <p>
                                    <input
                                        type="radio"
                                        id="cash-on-delivery"
                                        name="radio-group"
                                    />
                                    <label for="cash-on-delivery">Cash on Delivery</label>
                                </p>
                            </div>

                            <button type="submit" class="default-btn">Place Order</button>
                        </div>
                </div>
            </div>
        </form>
</div>
    {{-- Coupon Application Form --}}
    <form action="{{ route('apply-coupon') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="coupon_code" class="form-control" placeholder="Enter your coupon code" required>
        </div>
        <button type="submit" class="default-btn">Apply Coupon</button>
    </form>

    </div>
</section>
<!-- End Checkout Area -->
@endsection
