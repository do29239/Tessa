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

        <form>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">Billing Details</h3>

                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Town / City <span class="required">*</span></label>
                                    <div class="select-box">
                                        <select class="form-control">
                                            <option>Skopje</option>
                                            <option>Tetovo</option>
                                            <option>Gostivar</option>
                                            <option>Ohrid</option>
                                            <option>Prilep</option>
                                            <option>Struga</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label
                                    >Postcode / Zip <span class="required">*</span></label
                                    >
                                    <input type="text" class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label
                                    >Email Address <span class="required">*</span></label
                                    >
                                    <input type="email" class="form-control" />
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
                                    <th scope="col">Total</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="product-name">
                                        <a href="#">Long Sleeve Leopard T-Shirt</a>
                                    </td>

                                    <td class="product-total">
                                        <span class="subtotal-amount">$250.00</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-name">
                                        <a href="#">Causal V-Neck Soft Raglan</a>
                                    </td>

                                    <td class="product-total">
                                        <span class="subtotal-amount">$200.00</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-name">
                                        <a href="#">Book Divas</a>
                                    </td>

                                    <td class="product-total">
                                        <span class="subtotal-amount">$140.50</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-name">
                                        <a href="#">Hanes Men's Pullover</a>
                                    </td>

                                    <td class="product-total">
                                        <span class="subtotal-amount">$200.00</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="order-subtotal">
                                        <span>Cart Subtotal</span>
                                    </td>

                                    <td class="order-subtotal-price">
                                        <span class="order-subtotal-amount">$800.00</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="order-shipping">
                                        <span>Shipping</span>
                                    </td>

                                    <td class="shipping-price">
                                        <span>$30.00</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="total-price">
                                        <span>Order Total</span>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$830.00</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="payment-box">
                            <div class="payment-method">
                                <p>
                                    <input
                                        type="radio"
                                        id="direct-bank-transfer"
                                        name="radio-group"
                                        checked
                                    />
                                    <label for="direct-bank-transfer"
                                    >Direct Bank Transfer</label
                                    >
                                    Make your payment directly into our bank account. Please
                                    use your Order ID as the payment reference. Your order
                                    will not be shipped until the funds have cleared in our
                                    account.
                                </p>
                                <p>
                                    <input type="radio" id="paypal" name="radio-group" />
                                    <label for="paypal">PayPal</label>
                                </p>
                                <p>
                                    <input
                                        type="radio"
                                        id="cash-on-delivery"
                                        name="radio-group"
                                    />
                                    <label for="cash-on-delivery">Cash on Delivery</label>
                                </p>
                            </div>

                            <a href="#" class="default-btn">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Checkout Area -->
@endsection
