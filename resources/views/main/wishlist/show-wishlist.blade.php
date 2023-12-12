@extends('layouts.master')

@section('content')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>My Wishlist</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>My Wishlist</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Wishlist Area -->
    <section class="cart-area ptb-100">
        <div class="container">
            <form>
                    <livewire:show-wishlist/>

            </form>
        </div>
    </section>
    <!-- End Wishlist Area -->
@endsection
