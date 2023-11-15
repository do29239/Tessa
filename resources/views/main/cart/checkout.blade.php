@extends('layouts.master')

@section('content')


    <!-- Start Checkout Area -->
<section class="checkout-area ptb-100">
    <div class="container">
        <div class="user-actions">
            <i class="bx bx-log-in"></i>
            <span
            >Returning customer?
            <a href="../login.html">Click here to login</a></span
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
                                            <option>{{ Auth::user()->profile->city }}</option>
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
                                    <input type="text" class="form-control" name="address" value="{{ Auth::user()->profile->address }}"/>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="phone" value="{{ Auth::user()->profile->phone }}" />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label
                                    >Postcode / Zip <span class="required">*</span></label
                                    >
                                    <input type="text" class="form-control" name="postcode" value="{{ Auth::user()->profile->postcode }}" />
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
                                            <span class="subtotal-amount">{{ $cartItem->total }} den</span>
                                        </td>
                                    </tr>
                                @endforeach

                                <tr>
                                    <td class="order-subtotal">
                                        <span>Cart Subtotal</span>
                                    </td>

                                    <td class="order-subtotal-quantity">
                                        <span>-</span>
                                    </td>

                                    <td class="order-subtotal-price">
                                        <span class="order-subtotal-amount">{{ $cartItems->sum('total') }} den</span>
                                    </td
                                </tr>

                                <tr>
                                    <td class="order-shipping">
                                        <span>Shipping</span>
                                    </td>

                                    <td class="shipping-price">
                                        <span>-</span>
                                    </td>
                                    <td class="product-subtotal">
                                        <span>150 den</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="total-price">
                                        <span>Order Total</span>
                                    </td>

                                    <td class="product-subtotal">
                                        <span>-</span>
                                    </td>

                                    <td class="subtotal-amount">
                                        <span class="subtotal-amount">{{ $cartItems->sum('total') + 150.00 }} den</span>
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
            </div>
        </form>
    </div>
</section>
<!-- End Checkout Area -->
@endsection
