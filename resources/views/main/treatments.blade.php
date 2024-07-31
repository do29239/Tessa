@extends('layouts.master')

@section('content')

    <section class="products-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">{{__('messages.SeeOurTreatments')}}</span>
                <h2>{{__('messages.OurTreatments')}}</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/Botugen.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>Botugen Treatment</h3>
                        </div>
                        <a href="{{ route('shop.search', 'Botugen') }}" class="link-btn"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/Keraterm.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>Keraterm Treatment</h3>
                        </div>
                        <a href="{{ route('shop.search', 'Keraterm') }}" class="link-btn"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/No Yellow-01.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>No Yellow Care </h3>
                        </div>
                        <a href="{{ route('shop.search', 'No Yellow Fanola') }}" class="link-btn"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/No Orange-01.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>No Orange Care </h3>
                        </div>
                        <a href="{{ route('shop.search', 'No Orange') }}" class="link-btn"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/Energy-01.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>Energy Vitamins</h3>
                        </div>
                        <a href="{{ route('shop.search', 'Energy') }}" class="link-btn"></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/Oro Therapy-01.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>Oro Puro Treatment</h3>
                        </div>
                        <a href="{{route('shop.search', 'Oro Puro')}}" class="link-btn"></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/Fiber Fix-01.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>Fiber Fix Treatment</h3>
                        </div>
                        <a href="{{ route('shop.search','Fiber Fix') }}" class="link-btn"></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/Real Macadamia-01.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>Real Macadamia Treatment</h3>
                        </div>
                        <a href="{{ route('shop.search', 'Real Macadamia') }}" class="link-btn"></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/Real Keratin-01.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>Real Keratin Treatment</h3>
                        </div>
                        <a href="{{ route('shop.search', 'Real Keratin') }}" class="link-btn"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/Real Argan-01.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>Real Argan Treatment</h3>
                        </div>
                        <a href="{{ route('shop.search', 'Real Argan') }}" class="link-btn"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/NutriCare.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>Nutri Care</h3>
                        </div>
                        <a href="{{ route('shop.search', 'Nutri Care') }}" class="link-btn"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="categories-box">
                        <img src="{{ asset('assets/img/webp/Goji-01.webp') }}" fetchpriority="high" alt="image" height="608.19" width="927.5">
                        <div class="content">
                            <h3>Real Color Goji</h3>
                        </div>
                        <a href="{{ route('shop.search', 'Goji') }}" class="link-btn"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
