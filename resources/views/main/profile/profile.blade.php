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
    <div class="profile-section">
        <h2>Address Management</h2>
        <!-- Address Management Details -->
        <!-- Add form or details here -->
    </div>
    <div class="profile-section">
        <h2>Account Settings</h2>
        <!-- Account Settings Options -->
        <a href="#" class="btn-profile">Change Password</a>
        <a href="#" class="btn-profile">Email Preferences</a>
        <a href="#" class="btn-profile">Delete Account</a>
    </div>
    <div class="profile-section">
        <h2>Wishlist</h2>
        <!-- Wishlist Items -->
        <!-- Add items or links here -->
    </div>
</div>
@endsection
