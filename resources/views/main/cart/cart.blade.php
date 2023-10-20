@extends('layouts.master')

@section('content')

<!-- Start Cart Area -->
<section class="cart-area ptb-100">
    <div class="container">
        <form>
            @livewire('cart.ShowCart', ['view' => 'show-cart'])
        </form>
    </div>
</section>
<!-- End Cart Area -->
@endsection
