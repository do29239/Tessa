@extends('layouts.master')

@section('content')


    <!-- Start Checkout Area -->
    <section class="checkout-area ptb-100">
        <div class="container">
            <div class="user-actions">
                <i class='bx bx-info-circle'></i>
                <span>Change your details in Profile ! <a href="{{url('/profile')}}">Click <span class="the_link">here</span> to go to your profile</a></span>
            </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">{{__('messages.billing_details')}}</h3>

                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>{{__('messages.city')}}<span class="required">*</span></label>
                                        <div class="select-box">
                                            <select class="form-control" disabled>
                                                <option>{{ Auth::user()->city }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>{{__('messages.first_name')}}<span class="required">*</span></label>
                                        <input type="text" name="first_name" value="{{ Auth::user()->first_name }}" class="form-control" readonly/>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>{{__('messages.last_name')}}<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}" readonly/>
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
                                        <label>{{__('messages.address')}}<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}" readonly/>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>{{__('messages.phone')}}<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" readonly/>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>{{__('messages.postcode')}}<span class="required">*</span></label>
                                        <input type="text" class="form-control" name="postcode" value="{{ Auth::user()->postcode }}" readonly/>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>{{__('messages.email')}}<span class="required">*</span></label>
                                        <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" readonly/>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>{{__('messages.message')}}<span class="required">*</span></label>
                                        <textarea type="text" name="message" class="form-control" cols="30" rows="5" placeholder="Write us a Message (Optional)"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        @livewire('place-order')
                    </div>

                </div>

        </div>
    </section>
    <!-- End Checkout Area -->
@endsection
