@extends('layouts.master')

@section('content')
    <!-- Start Page Title -->

    <!-- End Page Title -->


    <section class="login-area ptb-100">

        <div class="login-content">
            <h2>Login</h2>

            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf
                <div class="form-group">
                    <input id="email" name="email" type="email" class="form-control" placeholder="Username or email address" :value="old('email')" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="form-group">
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password" required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <button type="submit" class="default-btn">Login</button>

                <a href="{{ route('password.request') }}" class="forgot-password">Lost your password?</a>


            </form>
        </div>

    </section>

@endsection
