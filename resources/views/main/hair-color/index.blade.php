@extends('layouts.master') {{-- Replace with your actual layout file --}}

@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Colors</h2>
                <ul>
                    <li><a href="{{ url('/') }}">{{__('messages.home')}}</a></li>
                    <li>{{__('messages.colors')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->


    <!-- Start Sales Products Area -->
    <section class="products-area pt-100 pb-70">
        <div class="container">
            <div class="row">
            @include('main.display-products')
            </div>
        </div>
</section>
<!-- End Sales Products Area -->
@endsection
