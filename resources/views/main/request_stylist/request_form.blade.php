@extends('layouts.master')

@section('content')

<section class="login-area ptb-100">

    <div class="login-content">
        <h2>Request stylist account:</h2>

        <form class="login-form" action="{{url('sendemail/send')}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <input type="text" name="surname" class="form-control" placeholder="Enter your saloon phone number">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Enter your saloon city">
            </div>
            <div class="form-group">
                <input type="text" name="saloon" class="form-control" placeholder="Enter your saloon name">
            </div>
            <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Enter your saloon address">
            </div>
            <button type="submit" class="default-btn">Submit request</button>

        </form>
    </div>

</section>
