@extends('layouts.frontend.master')
@section('content')

<!-- Begin Munoz's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Detail Menu</h2>
            <ul>
                <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                <li class="active">{{ $product->name }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Munoz's Breadcrumb Area End Here -->

<!-- Begin Munoz's Single Product Affiliate Area -->
<div class="sp-area sp-affiliate_area">
    <div class="container">
        <div class="sp-nav">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sp-img_area">
                        <div class="sp-img_slider-2 slick-img-slider munoz-slick-slider arrow-type-two"
                            data-slick-options='{
                                                                        "slidesToShow": 1,
                                                                        "arrows": false,
                                                                        "fade": true,
                                                                        "draggable": false,
                                                                        "swipe": false,
                                                                        "asNavFor": ".sp-img_slider-nav"
                                                                        }'>
                            <div class="single-slide red">
                                <a class="popup-img venobox vbox-item" href="{{ Storage::url($product->photo) }}"
                                    data-gall="myGallery">
                                    <i class="fa fa-search"></i>
                                    <img src="{{ Storage::url($product->photo) }}" alt="Munoz's Product Image">
                                </a>
                            </div>
                            <div class="single-slide  orange">
                                <a class="popup-img venobox vbox-item" href="{{ Storage::url($product->photo) }}"
                                    data-gall="myGallery">
                                    <i class="fa fa-search"></i>
                                    <img src="{{ Storage::url($product->photo) }}" alt="Munoz's Product Image">
                                </a>
                            </div>
                            <div class="single-slide brown">
                                <a class="popup-img venobox vbox-item" href="{{ Storage::url($product->photo) }}"
                                    data-gall="myGallery">
                                    <i class="fa fa-search"></i>
                                    <img src="{{ Storage::url($product->photo) }}" alt="Munoz's Product Image">
                                </a>
                            </div>
                            <div class="single-slide umber">
                                <a class="popup-img venobox vbox-item" href="{{ Storage::url($product->photo) }}"
                                    data-gall="myGallery">
                                    <i class="fa fa-search"></i>
                                    <img src="{{ Storage::url($product->photo) }}" alt="Munoz's Product Image">
                                </a>
                            </div>
                        </div>
                        <div class="sp-img_slider-nav slick-slider-nav munoz-slick-slider arrow-type-two"
                            data-slick-options='{
                                                                        "slidesToShow": 4,
                                                                        "asNavFor": ".sp-img_slider-2",
                                                                        "focusOnSelect": true
                                                                        }' data-slick-responsive='[
                                                                                                {"breakpoint":1200, "settings": {"slidesToShow": 3}},
                                                                                                {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                                                                                {"breakpoint":321, "settings": {"slidesToShow": 2}}
                                                                                            ]'>
                            <div class="single-slide red">
                                <img src="{{ Storage::url($product->photo) }}" alt="Munoz's Product Thumnail">
                            </div>
                            <div class="single-slide orange">
                                <img src="{{ Storage::url($product->photo) }}" alt="Munoz's Product Thumnail">
                            </div>
                            <div class="single-slide brown">
                                <img src="{{ Storage::url($product->photo) }}" alt="Munoz's Product Thumnail">
                            </div>
                            <div class="single-slide umber">
                                <img src="{{ Storage::url($product->photo) }}" alt="Munoz's Product Thumnail">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sp-content">
                        <div class="sp-heading">
                            <h2><a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a></h2>
                        </div>
                        <div class="price-box">
                            <span class="new-price">Rp {{ $product->price }}</span>
                        </div>
                        <div class="product-desc">
                            <p>{{ $product->description }}.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Munoz's Single Product Affiliate Area End Here -->

<!-- Begin Munoz's Single Product Tab Area -->
<div class="sp-tab_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sp-product-tab_nav">
                    <div class="product-tab">
                        <ul class="nav product-menu">
                            <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content munoz-tab_content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">
                                <p class="short-desc">
                                    {{ $product->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Munoz's Single Product Tab Area End Here -->

<!-- Begin Munoz's Product Area Two -->
<div class="munoz-product_area munoz-product_area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="munoz-section_area">
                    <h3 class="section-title">Special Offer</h3>
                    <p class="short-desc">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form</p>
                </div>
                <div class="munoz-product_slider-2 slider-navigation_style-1">
                    @foreach($menus as $menu)
                    <div class="slide-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{ route('product.show', $menu->id) }}">
                                    <img class="primary-img" src="{{ Storage::url($menu->photo) }}"
                                        alt="Munoz's Product Image">
                                    <img class="secondary-img" src="{{ Storage::url($menu->photo) }}"
                                        alt="Munoz's Product Image">
                                </a>
                                <span class="sticker">New</span>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <div class="product-category"><a href="javascript:void(0)">{{ $menu->category->name }}</a></div>
                                    <h3 class="product-name"><a href="{{ route('product.show', $menu->id) }}">{{ $menu->name }}</a></h3>
                                    <div class="price-box">
                                    <span class="new-price">Rp {{ $menu->price }}</span>
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
@endsection
@push('scripts')

@endpush
