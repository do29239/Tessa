@extends('layouts.master')

@section('content')

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="contact-info">
                    <h3>Here to Help</h3>

                    <ul class="contact-list">
                        <li>
                            <i class="bx bx-map"></i> Location:
                            <a href="#">Gostivar , North Macedonia</a>
                        </li>
                        <li>
                            <i class="bx bx-phone-call"></i> Call Us:
                            <a href="tel:+01321654214">+389 78 286 003</a>
                        </li>
                        <li>
                            <i class="bx bx-envelope"></i> Email Us:
                            <a href="mailto:hello@xton.com">tessa.academy@gmail.com</a>
                        </li>
                        <li>
                            <i class="bx bx-microphone"></i> Fax:
                            <a href="tel:+123456789">+389 78 286 003</a>
                        </li>
                    </ul>

                    <h3>Opening Hours:</h3>
                    <ul class="opening-hours">
                        <li><span>Monday:</span> 8AM - 6AM</li>
                        <li><span>Tuesday:</span> 8AM - 6AM</li>
                        <li><span>Wednesday:</span> 8AM - 6AM</li>
                        <li><span>Thursday - Friday:</span> 8AM - 6AM</li>
                        <li><span>Sunday:</span> Closed</li>
                    </ul>

                    <h3>Follow Us:</h3>
                    <ul class="social">
                        <li>
                            <a href="#" target="_blank"
                            ><i class="bx bxl-facebook"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"
                            ><i class="bx bxl-instagram"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"
                            ><i class="bx bxl-linkedin"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="bx bxl-skype"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"
                            ><i class="bx bxl-pinterest-alt"></i
                                ></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><i class="bx bxl-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <h3>{{__('messages.drop_line')}}</h3>
                    <p>
                        {{__('messages.questions_you_may_have')}}
                    </p>

                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>{{__('messages.Name')}} <span>*</span></label>
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="form-control"
                                        required
                                        data-error="Please enter your name"
                                        placeholder="{{__('messages.enter_your_name')}}"
                                    />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>{{__('messages.email')}}<span>*</span></label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control"
                                        required
                                        data-error="Please enter your email"
                                        placeholder="{{__('messages.enter_your_email')}}"
                                    />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>{{__('messages.phone')}}<span>*</span></label>
                                    <input
                                        type="text"
                                        name="phone_number"
                                        id="phone_number"
                                        class="form-control"
                                        required
                                        data-error="Please enter your phone number"
                                        placeholder="{{__('messages.enter_your_phone')}}"
                                    />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>{{__('messages.your_message')}}<span>*</span></label>
                                    <textarea
                                        name="message"
                                        id="message"
                                        cols="30"
                                        rows="5"
                                        required
                                        data-error="Please enter your message"
                                        class="form-control"
                                        placeholder="{{__('messages.write_message')}}"
                                    ></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    {{__('messages.SendMessage')}}
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Map -->
<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1487.2342475562943!2d20.913559805915394!3d41.79666699192719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13515765344a21bd%3A0x65d8aff7239b93e8!2z0KLRgNCz0L7QstGB0LrQuCDRhtC10L3RgtCw0YAg0JPQvtGB0YLQuNCy0LDRgA!5e0!3m2!1smk!2smk!4v1720714083576!5m2!1smk!2smk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- End Map -->
@endsection
