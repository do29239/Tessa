@extends('layouts.master')

@section('content')
    <section class="login-area ptb-100">

        <div class="login-content">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}" class="login-form">
                @csrf

                <!-- First Name -->
                <div class="form-group">
                    <x-input-label for="first_name" :value="__('First Name')" />
                    <x-text-input id="first_name" class="form-control" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div class="form-group">
                    <x-input-label for="last_name" :value="__('Last Name')" />
                    <x-text-input id="last_name" class="form-control" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Address -->
                <div class="form-group">
                    <x-input-label for="address" :value="__('Address')" />
                    <x-text-input id="address" class="form-control" type="text" name="address" :value="old('address')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <!-- City -->
                <div class="form-group">
                    <x-input-label for="city" :value="__('City')" />
                    <x-text-input id="city" class="form-control" type="text" name="city" :value="old('city')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                </div>

                <!-- Phone -->
                <div class="form-group">
                    <x-input-label for="phone" :value="__('Phone')" />
                    <x-text-input id="phone" class="form-control" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <!-- Postcode -->
                <div class="form-group">
                    <x-input-label for="postcode" :value="__('Postcode')" />
                    <x-text-input id="postcode" class="form-control" type="text" name="postcode" :value="old('postcode')" />
                    <x-input-error :messages="$errors->get('postcode')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form-group">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button class="default-btn" >
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>

    </section>
@endsection
