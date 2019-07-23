@extends('layouts.frontend.master')
@section('content')
<!-- Begin Munoz's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Other</h2>
            <ul>
                <li><a href="{{ route('frontend.about.index') }}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Munoz's Breadcrumb Area End Here -->
<!-- Begin Munoz's Main Content Area -->
<div class="main-content_area">
    <!-- Begin About Us Area -->
    <div class="about-us_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us_img">
                        <img class="lazyload" src="{{ asset('frontend/images/about-us/1.jpg')}}" alt="Munoz's About Us Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us_content">
                        <h3 class="heading">About Munoz</h3>
                        <p class="short-desc">
                            On the other hand, we denounce with righteous indignation and dislike men are so beguiled
                            and demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                            cannot foresee the pain and trouble.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End Here -->
    <!-- Begin Shipping Area Two -->

    <!-- Begin Munoz's Shipping Area Two -->
    <div class="munoz-shipping_area munoz-shipping_area-2">
        <div class="container">
            <div class="shipping-nav">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img class="lazyload" src="{{ asset('frontend/images/about-us/shipping-icon/1.png') }}" alt="Munoz's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>100% fresh food</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img class="lazyload" src="{{ asset('frontend/images/about-us/shipping-icon/2.png') }}" alt="Munoz's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>Free Delivery</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img class="lazyload" src="{{ asset('frontend/images/about-us/shipping-icon/3.png') }}" alt="Munoz's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>Award Winner</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="shipping-item">
                            <div class="shipping-icon">
                                <img class="lazyload" src="{{ asset('frontend/images/about-us/shipping-icon/4.png')}}" alt="Munoz's Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h6>Fresh Farm Food</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Munoz's Shipping Area Two End Here -->

    <!-- Shipping Area Two End Here -->
    <!-- Begin Mission Area -->
    <div class="mission-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="mission-heading">Mission vision</h3>
                    <div class="mission-img_area">
                        <a class="venobox" data-autoplay="true" data-vbtype="video"
                            href="https://www.youtube.com/watch?v=9No-FiEInLA&amp;t=20s">
                            <i class="ion-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission Area End Here -->
    <!-- Begin Testimonial Area -->
    <div class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider slider-navigation_style-4">
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img class="lazyload" src="{{ asset('frontend/images/about-us/testimonial/1.png') }}" alt="Munoz's Testimonial Image">
                            </div>
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <i class="ion-quote"></i>
                                </div>
                                <p class="short-desc">
                                    There's nothing would satisfy me much more than a worry-free clean and responsive
                                    theme for my high-traffic site.
                                </p>
                                <div class="client-info">
                                    <h3 class="name">Willie Bradley</h3>
                                    <span class="occupation">/ Reporter</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img class="lazyload" src="{{ asset('frontend/images/about-us/testimonial/2.png') }}" alt="Munoz's Testimonial Image">
                            </div>
                            <div class="testimonial-content">
                                <div class="quote-icon">
                                    <i class="ion-quote"></i>
                                </div>
                                <p class="short-desc">
                                    There's nothing would satisfy me much more than a worry-free clean and responsive
                                    theme for my high-traffic site.
                                </p>
                                <div class="client-info">
                                    <h3 class="name">Willie Bradley</h3>
                                    <span class="occupation">/ Reporter</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End Here -->
</div>
<!-- Munoz's Main Content Area End Here -->

<!-- Begin Munoz's Brand Area -->
<div class="munoz-brand_area">
    <div class="container">
        <div class="munoz-brand_nav">
            <div class="row">
                <div class="col-lg-12">
                    <div class="munoz-brand_slider slider-navigation_style-1">
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img class="lazyload" src="{{ asset('frontend/images/brand/1.jpg')}}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img class="lazyload" src="{{ asset('frontend/images/brand/2.jpg')}}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img class="lazyload" src="{{ asset('frontend/images/brand/3.jpg') }}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img class="lazyload" src="{{ asset('frontend/images/brand/4.jpg') }}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img class="lazyload" src="{{ asset('frontend/images/brand/5.jpg') }}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img class="lazyload" src="{{ asset('frontend/images/brand/6.jpg') }}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img class="lazyload" src="{{ asset('frontend/images/brand/1.jpg') }}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Munoz's Brand Area End Here -->
@endsection
@push('scripts')
@endpush
