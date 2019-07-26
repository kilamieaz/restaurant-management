@extends('layouts.frontend.master')
@section('content')
<div class="munoz-slider_area munoz-slider_area-2">
    <div class="main-slider slider-navigation_style-1">
        <!-- Begin Single Slide Area -->
        <div class="single-slide animation-style-01 bg-3">
            <div class="container">
                <div class="slider-content">
                    <h3>Have a great tast</h3>
                    <h4>with fresh food.</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered</p>
                </div>
                <div class="slider-progress"></div>
            </div>
        </div>
        <!-- Single Slide Area End Here -->
        <!-- Begin Single Slide Area -->
        <div class="single-slide animation-style-02 bg-4">
            <div class="container">
                <div class="slider-content">
                    <h3>Have a great tast</h3>
                    <h4>with fresh food.</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered</p>
                </div>
                <div class="slider-progress"></div>
            </div>
        </div>
        <!-- Single Slide Area End Here -->
    </div>
</div>

<!-- Begin Munoz's Product Area Two -->
<div class="munoz-product_area munoz-product_area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="munoz-section_area">
                    <h3 class="section-title">New Product</h3>
                    <p class="short-desc">There are many variations of passages of Lorem Ipsum available, but
                        the majority have suffered alteration in some form</p>
                </div>
                <div class="munoz-product_slider-2 slider-navigation_style-1">
                    @foreach($menusLatest as $menu)
                    <div class="slide-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{ route('product.show', $menu->id) }}">
                                    <img class="lazyload primary-img" src="{{ Storage::url($menu->photo) }}"
                                        alt="Munoz's Product Image">
                                    <img class="lazyload secondary-img" src="{{ Storage::url($menu->photo) }}"
                                        alt="Munoz's Product Image">
                                </a>
                                <span class="sticker">New</span>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <div class="product-category"><a
                                            href="javascript:void(0)">{{$menu->category->name}}</a>
                                    </div>
                                    <h3 class="product-name"><a href="javascript:void(0)">{{$menu->name}}</a>
                                    </h3>
                                    <div class="price-box">
                                        {{-- <span class="old-price">$60.00</span> --}}
                                        <span class="new-price">Rp {{$menu->price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Munoz's Product Area Two End Here -->

<!-- Begin Munoz's Banner Area -->
<div class="munoz-banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="lazyload img-full" src="{{ asset('frontend/images/banner/1.jpg') }}"
                            alt="Munoz's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="lazyload img-full" src="{{ asset('frontend/images/banner/2.jpg') }}"
                            alt="Munoz's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="lazyload img-full" src="{{ asset('frontend/images/banner/3.jpg') }}"
                            alt="Munoz's Banner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Munoz's Banner Area End Here -->

<!-- Begin Munoz's Product Area Three-->
<div class="munoz-product_area-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="munoz-product_slider-3 slider-navigation_style-1">
                    <div class="slide-item">
                        <div class="single_product">
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h2 class="product-name">
                                        <a
                                            href="{{ route('product.show', $menuRandom->id) }}">{{$menuRandom->name}}.</a>
                                    </h2>
                                    <p class="product-desc">
                                        {{$menuRandom->description}}
                                    </p>
                                    <div class="munoz-countdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="special-banner_img"></div>
            </div>
        </div>
    </div>
</div>
<!-- Munoz's Product Area Three End Here -->

<!-- Begin Munoz's Banner Area Two -->
<div class="munoz-banner_area munoz-banner_area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="lazyload img-full" src="{{ asset('frontend/images/banner/4.jpg') }}"
                            alt="Munoz's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="lazyload img-full" src="{{ asset('frontend/images/banner/5.jpg') }}"
                            alt="Munoz's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="lazyload img-full" src="{{ asset('frontend/images/banner/6.jpg')}}"
                            alt="Munoz's Banner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Munoz's Banner Area Two End Here -->
@endsection
@push('scripts')
@endpush
