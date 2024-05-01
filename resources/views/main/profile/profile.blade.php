@extends('layouts.master')

@section('content')

<div class="container">
    <div class="profile-header">
        <img src="profile-pic.jpg" alt="Profile Picture">
        <h1>John Doe</h1>
        <p class="email">johndoe@example.com</p>
    </div>
    <div class="profile-section">
        <h2>Order History</h2>
        <!-- Order History Table -->
        @include('includes.order_history')
    </div>
    <div class="cart-table table-responsive">
        <h2>Address Management</h2>
        <form action="{{ route('profile.changeAddress') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
        <!-- Address -->
            <div class="form-group">
                <x-input-label for="address" :value="__('Address')" />
                <x-text-input id="address" class="form-control" type="text" name="address" :value="$user->address" required autocomplete="username" />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- City -->
            <div class="form-group">
                <x-input-label for="city" :value="__('City')" />
                <x-text-input id="city" class="form-control" type="text" name="city" :value="$user->city" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>

            <!-- Phone -->
            <div class="form-group">
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input id="phone" class="form-control" type="text" name="phone" :value="$user->phone" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- Postcode -->
            <div class="form-group">
                <x-input-label for="postcode" :value="__('Postcode')" />
                <x-text-input id="postcode" class="form-control" type="text" name="postcode" :value="$user->postcode" />
                <x-input-error :messages="$errors->get('postcode')" class="mt-2" />
            </div>
                <button type="submit" class="btn btn-primary btn-block">Update Product</button>
        </form>
    </div>

    <div class="profile-section">
        <h2>Account Settings</h2>
        <!-- Account Settings Options -->
        <a href="#" class="btn-profile">Change Password</a>
        <a href="#" class="btn-profile">Email Preferences</a>
        <a href="#" class="btn-profile">Delete Account</a>
    </div>
    <div class="cart-area ptb-100">
        <h2>Wishlist</h2>
        <livewire:show-wishlist/>

    </div>
</div>

@endsection
