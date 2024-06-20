@extends('layouts.master')

@section('content')
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>404 Not Found</h2>
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>404 Not Found</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Start Error Area -->
    <section class="error-area ptb-100">
        <div class="container">
            <div class="error-content">
                <img src="{{ asset('assets/img/404image.webp') }}" width="440" height="245" alt="error">
                <h3>Page Not Found</h3>
                <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                <a href="{{url('/')}}" class="default-btn">Go to Home</a>
            </div>
        </div>
    </section>
    <!-- End Error Area -->

@endsection
