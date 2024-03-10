@extends('layouts.master')

@section('content')
    <section class="login-area ptb-100">
        <div class="login-content">
            <h2>{{ __('messages.register') }}</h2>
            <form method="POST" action="{{ route('register') }}" class="login-form">
                @csrf

                <!-- First Name -->
                <div class="form-group">
                    <x-input-label for="first_name" :value="__('messages.first_name')" />

                    <x-text-input
                        id="first_name"
                        class="form-control"
                        type="text"
                        name="first_name"
                        :placeholder="__('messages.enter_your_first_name')"
                        :value="old('first_name')"
                        required
                        autofocus
                        autocomplete="name"
                    />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div class="form-group">
                    <x-input-label for="last_name" :value="__('messages.last_name')" />

                    <x-text-input
                        id="last_name"
                        class="form-control"
                        type="text"
                        name="last_name"
                        :placeholder="__('messages.enter_your_last_name')"
                        :value="old('last_name')"
                        required
                    />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <x-input-label for="email" :value="__('messages.email')" />

                    <x-text-input
                        id="email"
                        class="form-control"
                        type="email"
                        name="email"
                        :placeholder="__('messages.enter_your_email')"
                        :value="old('email')"
                        required
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Address -->
                <div class="form-group">
                    <x-input-label for="address" :value="__('messages.address')" />

                    <x-text-input
                        id="address"
                        class="form-control"
                        type="text"
                        name="address"
                        :placeholder="__('messages.enter_your_address')"
                        :value="old('address')"
                        required
                    />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <!-- City -->
                <div class="form-group">
                    <x-input-label for="city" :value="__('messages.city')" />

                    <x-text-input
                        id="city"
                        class="form-control"
                        type="text"
                        name="city"
                        :placeholder="__('messages.enter_your_city')"
                        :value="old('city')"
                        required
                    />
                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                </div>

                <!-- Phone -->
                <div class="form-group">
                    <x-input-label for="phone" :value="__('messages.phone')" />

                    <x-text-input
                        id="phone"
                        class="form-control"
                        type="text"
                        name="phone"
                        :placeholder="__('messages.enter_your_phone')"
                        :value="old('phone')"
                        required
                    />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <!-- Postcode -->
                <div class="form-group">
                    <x-input-label for="postcode" :value="__('messages.postcode')" />

                    <x-text-input
                        id="postcode"
                        class="form-control"
                        type="text"
                        name="postcode"
                        :placeholder="__('messages.enter_your_postcode')"
                        :value="old('postcode')"
                    />
                    <x-input-error :messages="$errors->get('postcode')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form-group">
                    <x-input-label for="password" :value="__('messages.password')" />

                    <x-text-input
                        id="password"
                        class="form-control"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <x-input-label for="password_confirmation" :value="__('messages.confirm_password')" />

                    <x-text-input
                        id="password_confirmation"
                        class="form-control"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('messages.already_registered') }}
                    </a>

                    <button class="default-btn">
                        {{ __('messages.register') }}
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
