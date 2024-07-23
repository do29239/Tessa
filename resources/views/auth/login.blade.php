@extends('layouts.master')

@section('content')
    <!-- Start Page Title -->
    <!-- End Page Title -->

    <section class="login-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="login-content">
                        <h2>{{ __('messages.login') }}</h2>

                        <form method="POST" action="{{ route('login') }}" class="login-form">
                            @csrf
                            <div class="form-group">
                                <input id="email" name="email" type="email" class="form-control" placeholder="{{ __('messages.email_address') }}" :value="old('email')" required autofocus>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="form-group position-relative">
                                <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('messages.password') }}" required autocomplete="current-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <a id="togglePasswordButton" class="position-absolute top-50 end-0 translate-middle-y me-3 cursor-pointer">
                                    <i id="togglePasswordIcon" class="bx bx-show"></i>
                                </a>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="margin-right: -50px;">
                                    <label class="sub-title form-check-label mb-0" for="remember" style="white-space: nowrap; margin-right: 90px;" >
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            @if(request()->has('redirect_to'))
                                <input type="hidden" name="redirect_to" value="{{ request()->input('redirect_to') }}">
                            @endif
                            <button type="submit" class="default-btn">{{ __('messages.login') }}</button>
                            <a href="{{ route('password.request') }}" class="forgot-password">{{ __('messages.lost_password') }}</a>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="new-customer-content">
                        <h2>{{ __('messages.new_customer') }}</h2>

                        <span>{{ __('messages.create_account') }}</span>
                        <p>{{ __('messages.create_account_text') }}</p>
                        <a href="{{ route('register') }}" class="optional-btn">{{ __('messages.create_account') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
