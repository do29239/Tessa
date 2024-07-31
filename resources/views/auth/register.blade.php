@extends('layouts.master')

@section('content')
    <style>
        .login-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 500px; /* or any other desired width */
        }

        .form-group {
            width: 100%;
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            box-sizing: border-box;
        }

    </style>
    <section class="login-area ptb-100">
        <div class="user-actions">
            <i class='bx bx-info-circle'></i>
            <span> {{__('messages.register_info')}}</span>
        </div>
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
                        :placeholder="__('messages.enter_your_password')"
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
                        :placeholder="__('messages.enter_your_confirm_password')"
                        required
                        autocomplete="new-password"
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="flex flex-col items-center mt-4">
                    <div class="buy-checkbox-btn mb-4">
                        <label class="inline-flex items-center">
                            <input class="inp-cbx mr-2" id="cbx" type="checkbox" name="is_stylist" value="1">
                            <span>Click this if you are a Stylist!!</span>
                        </label>
                    </div>
                    <button class="default-btn mb-4">
                        {{ __('Register') }}
                    </button>
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>

            </form>

        </div>

    </section>
@endsection
<style>
    .buy-checkbox-btn {
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .inline-flex {
        display: inline-flex;
        align-items: center;
        white-space: nowrap;
    }

    .inp-cbx {
        margin-right: 8px;
    }

</style>
