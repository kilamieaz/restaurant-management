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
                    <div class="munoz-btn-ps_left slide-btn">
                        <a class="munoz-btn-2" href="shop-left-sidebar.html">Shop Now</a>
                    </div>
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
                    <div class="munoz-btn-ps_left slide-btn">
                        <a class="munoz-btn-2" href="shop-left-sidebar.html">Shop Now</a>
                    </div>
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
                                <a href="single-product.html">
                                    <img class="primary-img" src="{{ Storage::url('photo/' . $menu->photo) }}"
                                        alt="Munoz's Product Image">
                                    <img class="secondary-img" src="{{ Storage::url('photo/' . $menu->photo) }}"
                                        alt="Munoz's Product Image">
                                </a>
                                <span class="sticker">New</span>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <div class="product-category"><a
                                            href="javascript:void(0)">{{$menu->category->name}}</a>
                                    </div>
                                    <h3 class="product-name"><a href="single-product.html">{{$menu->name}}</a>
                                    </h3>
                                    <div class="price-box">
                                        {{-- <span class="old-price">$60.00</span> --}}
                                        <span class="new-price">{{$menu->price}}</span>
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
                        <img class="img-full" src="{{ asset('frontend/images/banner/1.jpg') }}" alt="Munoz's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="img-full" src="{{ asset('frontend/images/banner/2.jpg') }}" alt="Munoz's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="img-full" src="{{ asset('frontend/images/banner/3.jpg') }}" alt="Munoz's Banner">
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
                                        <a href="shop-left-sidebar.html">{{$menuRandom->name}}.</a>
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

<!-- Begin Munoz's Product Tab Area -->
<div class="munoz-product-tab_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-section_area">
                            <div class="product-tab_title">
                                <h3>All Product</h3>
                            </div>
                            <div class="product-tab">
                                <ul class="nav product-menu">
                                    @foreach($categories as $category)
                                    <li><a data-toggle="tab"
                                            href="#{{ $category->name }}"><span>{{ $category->name }}</span></a></li>
                                    @endforeach
                                    {{-- <li><a class="active" data-toggle="tab" href="#pizza"><span>Pizza</span></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-content munoz-tab_content">
                            @foreach($categories as $category)
                            {{-- <div id="pizza" class="tab-pane active show" role="tabpanel">
                                <div class="munoz-product-tab_slider slider-navigation_style-1">
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="assets/images/product/medium-size/1.jpg"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="assets/images/product/medium-size/2.jpg"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a
                                                                href="javascript:void(0)" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                    class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a
                                                            href="javascript:void(0)">Barbeku</a></div>
                                                    <h3 class="product-name"><a href="single-product.html">Ullam
                                                            nobis cumque</a></h3>
                                                    <div class="price-box">
                                                        <span class="old-price">$50.99</span>
                                                        <span class="new-price">$46.91</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-half"></i>
                                                            </li>
                                                            <li class="silver-color"><i
                                                                    class="ion-ios-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="assets/images/product/medium-size/3.jpg"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="assets/images/product/medium-size/4.jpg"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker-2">Sale</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a
                                                                href="javascript:void(0)" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                    class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a
                                                            href="javascript:void(0)">Morganfield Ribs</a></div>
                                                    <h3 class="product-name"><a href="single-product.html">Maiores quis
                                                            ea</a></h3>
                                                    <div class="price-box">
                                                        <span class="old-price">$60.99</span>
                                                        <span class="new-price">$56.91</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i
                                                                    class="ion-ios-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="assets/images/product/medium-size/5.jpg"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="assets/images/product/medium-size/6.jpg"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker-2">Sale</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a
                                                                href="javascript:void(0)" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                    class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a href="javascript:void(0)">Fried
                                                            chicken</a></div>
                                                    <h3 class="product-name"><a href="single-product.html">Temporibus
                                                            voluptate</a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <span class="old-price">$140.99</span>
                                                        <span class="new-price">$130.91</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="assets/images/product/medium-size/7.jpg"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="assets/images/product/medium-size/8.jpg"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker-2">Sale</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a
                                                                href="javascript:void(0)" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                    class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a href="javascript:void(0)">Doner
                                                            kebab</a></div>
                                                    <h3 class="product-name"><a href="single-product.html">Architecto
                                                            modi eum</a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <span class="old-price">$110.99</span>
                                                        <span class="new-price">$100.91</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-half"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="assets/images/product/medium-size/9.jpg"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="assets/images/product/medium-size/10.jpg"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a
                                                                href="javascript:void(0)" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                    class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a href="javascript:void(0)">Seekh
                                                            kabab</a></div>
                                                    <h3 class="product-name"><a href="single-product.html">Assumenda
                                                            consectetur</a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <span class="old-price">$90.00</span>
                                                        <span class="new-price">$85.00</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i
                                                                    class="ion-ios-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="assets/images/product/medium-size/11.jpg"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="assets/images/product/medium-size/12.jpg"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker-2">Sale</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a
                                                                href="javascript:void(0)" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                    class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a href="javascript:void(0)">Doner
                                                            Kebab</a></div>
                                                    <h3 class="product-name"><a href="single-product.html">Molestias
                                                            ipsam</a></h3>
                                                    <div class="price-box">
                                                        <span class="old-price">$40.00</span>
                                                        <span class="new-price">$35.00</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i
                                                                    class="ion-ios-star-outline"></i></li>
                                                            <li class="silver-color"><i
                                                                    class="ion-ios-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="assets/images/product/medium-size/13.jpg"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="assets/images/product/medium-size/14.jpg"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a
                                                                href="javascript:void(0)" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                    class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a
                                                            href="javascript:void(0)">Omelette</a></div>
                                                    <h3 class="product-name"><a href="single-product.html">Eaque
                                                            nesciunt</a></h3>
                                                    <div class="price-box">
                                                        <span class="old-price">$60.00</span>
                                                        <span class="new-price">$55.00</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-half"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="assets/images/product/medium-size/15.jpg"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="assets/images/product/medium-size/16.jpg"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a
                                                                href="javascript:void(0)" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                    class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a href="javascript:void(0)">Cora's
                                                            breakfast</a></div>
                                                    <h3 class="product-name"><a href="single-product.html">Unde
                                                            facilis</a></h3>
                                                    <div class="price-box">
                                                        <span class="old-price">$25.00</span>
                                                        <span class="new-price">$20.00</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i
                                                                    class="ion-ios-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="assets/images/product/medium-size/1.jpg"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="assets/images/product/medium-size/2.jpg"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker-2">Sale</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a
                                                                href="javascript:void(0)" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                    class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a href="javascript:void(0)">Rice and
                                                            chicken</a></div>
                                                    <h3 class="product-name"><a href="single-product.html">Ullam
                                                            nobis cumque</a></h3>
                                                    <div class="price-box">
                                                        <span class="old-price">$85.00</span>
                                                        <span class="new-price">$80.50</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="assets/images/product/medium-size/4.jpg"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="assets/images/product/medium-size/3.jpg"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker-2">Sale</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a
                                                                href="javascript:void(0)" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                    class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a
                                                            href="javascript:void(0)">Barbecue</a></div>
                                                    <h3 class="product-name"><a href="single-product.html">Tenetur
                                                            facilis</a></h3>
                                                    <div class="price-box">
                                                        <span class="old-price">$35.99</span>
                                                        <span class="new-price">$30.91</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-half"></i>
                                                            </li>
                                                            <li class="silver-color"><i
                                                                    class="ion-ios-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="assets/images/product/medium-size/6.jpg"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="assets/images/product/medium-size/5.jpg"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a
                                                                href="javascript:void(0)" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                    class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a href="javascript:void(0)">Chicken
                                                            wings</a></div>
                                                    <h3 class="product-name"><a href="single-product.html">Asperiores
                                                            repellat</a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <span class="old-price">$85.99</span>
                                                        <span class="new-price">$80.91</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="assets/images/product/medium-size/8.jpg"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="assets/images/product/medium-size/7.jpg"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker-2">Sale</span>
                                                <div class="add-actions">
                                                    <ul>
                                                        <li class="quick-view-btn" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><a
                                                                href="javascript:void(0)" data-toggle="tooltip"
                                                                data-placement="top" title="Quick View"><i
                                                                    class="ion-ios-search"></i></a>
                                                        </li>
                                                        <li><a href="wishlist.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Wishlist"><i
                                                                    class="ion-ios-heart-outline"></i></a>
                                                        </li>
                                                        <li><a href="compare.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To Compare"><i
                                                                    class="ion-ios-reload"></i></a>
                                                        </li>
                                                        <li><a href="cart.html" data-toggle="tooltip"
                                                                data-placement="top" title="Add To cart"><i
                                                                    class="ion-bag"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a href="javascript:void(0)">Doner
                                                            kebab</a></div>
                                                    <h3 class="product-name"><a href="single-product.html">Sapiente
                                                            perferendis</a>
                                                    </h3>
                                                    <div class="price-box">
                                                        <span class="old-price">$50.99</span>
                                                        <span class="new-price">$46.91</span>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li class="silver-color"><i class="ion-ios-star-half"></i>
                                                            </li>
                                                            <li class="silver-color"><i
                                                                    class="ion-ios-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div id="{{$category->name}}" class="tab-pane" role="tabpanel">
                                <div class="munoz-product-tab_slider slider-navigation_style-1">
                                    <div class="slide-item">
                                        @foreach($category->menus as $menu)

                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img"
                                                        src="{{ Storage::url('photo/' . $menu->photo) }}"
                                                        alt="Munoz's Product Image">
                                                    <img class="secondary-img"
                                                        src="{{ Storage::url('photo/' . $menu->photo) }}"
                                                        alt="Munoz's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <div class="product-category"><a
                                                            href="javascript:void(0)">{{ $menu->category->name }}</a>
                                                    </div>
                                                    <h3 class="product-name"><a
                                                            href="single-product.html">{{ $menu->name }}</a></h3>
                                                    <div class="price-box">
                                                        {{-- <span class="old-price">$50.99</span> --}}
                                                        <span class="new-price">{{ $menu->price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Munoz's Product Tab Area End Here -->

<!-- Begin Munoz's Banner Area Two -->
<div class="munoz-banner_area munoz-banner_area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="img-full" src="{{ asset('frontend/images/banner/4.jpg') }}" alt="Munoz's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="img-full" src="{{ asset('frontend/images/banner/5.jpg') }}" alt="Munoz's Banner">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-item img-hover_effect">
                    <a href="javascript:void(0)">
                        <img class="img-full" src="{{ asset('frontend/images/banner/6.jpg')}}" alt="Munoz's Banner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Munoz's Banner Area Two End Here -->

<!-- Begin Munoz's Brand Area -->
<div class="munoz-brand_area">
    <div class="container">
        <div class="munoz-brand_nav">
            <div class="row">
                <div class="col-lg-12">
                    <div class="munoz-brand_slider slider-navigation_style-1">
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/images/brand/1.jpg') }}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/images/brand/2.jpg') }}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/images/brand/3.jpg') }}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/images/brand/4.jpg')}}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/images/brand/5.jpg')}}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/images/brand/6.jpg')}}" alt="Munoz's Brand Image">
                            </a>
                        </div>
                        <div class="slide-item">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/images/brand/1.jpg')}}" alt="Munoz's Brand Image">
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
