@extends('layouts.master')

@section('content')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{__('messages.my_wishlist')}}</h2>
                <ul>
                    <li><a href="{{ url('/') }}">{{__('messages.home')}}</a></li>
                    <li>{{__('messages.my_wishlist')}}</li>
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
