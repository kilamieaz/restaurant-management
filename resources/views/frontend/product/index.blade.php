@extends('layouts.frontend.master')
@section('content')
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
<!-- Begin Munoz's Product Area Two -->
<div class="munoz-product_area munoz-product_area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="munoz-section_area">
                    <h3 class="section-title">All Product</h3>
                    <p class="short-desc">There are many variations of passages of Lorem Ipsum available, but
                        the majority have suffered alteration in some form</p>
                </div>
                @foreach($menusLatest->chunk(5) as $menus)
                <div class="munoz-product_slider-2 slider-navigation_style-1">
                    @foreach($menus as $menu)
                    <div class="slide-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{ route('product.show', $menu->id) }}">
                                    <img class="lazyload primary-img"
                                        src="{{ Storage::disk('public')->exists($menu->photo) ? Storage::url($menu->photo) : asset('image/image.png')}}"
                                        alt="Munoz's Product Image">
                                    <img class="lazyload secondary-img"
                                        src="{{ Storage::disk('public')->exists($menu->photo) ? Storage::url($menu->photo) : asset('image/image2.png')}}"
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
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Munoz's Product Area Two End Here -->
@endsection
@push('scripts')

@endpush
