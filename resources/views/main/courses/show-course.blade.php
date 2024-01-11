@extends('layouts.master')

@section('content')

    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$course->name}}</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Products Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Start Product Details Area -->
    <section class="product-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="products-details-image">
                        <ul class="products-details-image-slides">
                            @foreach($course->image as $image)
                                <li>
                                    <img src="{{ asset('storage/images/'.$image->name) }}" alt="image" />
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="products-details-desc">
                        <h3>{{$course->name}}</h3>

                        <div class="category">
                            <h5 class="">{{$course->category}}</h5>
                        </div>

                        <div class="">
                            <span class="">{{$course->description}}</span>
                        </div>


                        <!--
                        <div class="products-color-switch">
                          <span>Color:</span>

                          <ul>
                            <li><a href="#" title="Black" class="color-black"></a></li>
                            <li><a href="#" title="White" class="color-white"></a></li>
                            <li class="active">
                              <a href="#" title="Green" class="color-green"></a>
                            </li>
                            <li>
                              <a
                                href="#"
                                title="Yellow Green"
                                class="color-yellowgreen"
                              ></a>
                            </li>
                            <li><a href="#" title="Teal" class="color-teal"></a></li>
                          </ul>
                        </div>
          -->
                    </div>
                </div>
            </div>
        </div>

        <div class="related-products">
            <div class="container">
                <div class="section-title">
                    <h2>Related Courses</h2>
                </div>

                <div class="products-slides owl-carousel owl-theme">
                    @foreach($relatedCourses as $relatedCourse)
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="{{ route('showCourse', $relatedCourse->id) }}">
                                    @foreach($course->image as $image)
                                        <img src="{{ asset('storage/images/'.$image->name) }}" class="main-image" alt="image">
                                        <img src="{{ asset('storage/images/'.$image->name) }}" class="hover-image" alt="image">
                                        @break
                                    @endforeach
                                </a>

                                <div class="products-content">
                                    <span class="category">{{$relatedCourse->category}}</span>
                                    <h3><a href="#">{{ $relatedCourse->name }}</a></h3>
                                    <div class="price">
                                        <span class="new-price">{{ $relatedCourse->description }}</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <!-- End Product Details Area -->
@endsection
