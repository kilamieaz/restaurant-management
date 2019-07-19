<header>
    <div class="header-main_area header-main_area-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-5">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="{{ asset('frontend/images/menu/logo/2.png')}}" alt="Munoz's Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8 d-none d-lg-block position-static">
                    <div class="main-menu_area">
                        <nav class="main_nav">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main_area header-sticky stick">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-5">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="{{ asset('frontend/images/menu/logo/1.png') }}" alt="Munoz's Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8 d-none d-lg-block position-static">
                    <div class="main-menu_area">
                        <nav class="main_nav">
                            <ul>
                                <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-7">
                    <div class="header-right_area">
                        <ul>
                            <li>
                                <a href="#searchBar" class="search-btn toolbar-btn">
                                    <i class="ion-ios-search-strong"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#miniCart" class="minicart-btn toolbar-btn">
                                    <i class="ion-bag"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvasMenu"
                                    class="menu-btn toolbar-btn color--white d-none d-lg-block">
                                    <i class="ion-navicon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#mobileMenu"
                                    class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                    <i class="ion-navicon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-menu_wrapper" id="offcanvasMenu">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
            <div class="offcanvas-inner_logo">
                <a href="shop-left-sidebar.html">
                    <img src="{{ asset('frontend/images/menu/logo/1.png')}}" alt="Munoz's Offcanvas Logo">
                </a>
            </div>
            <div class="short-desc">
                <p>We are a team of designers and developers that create high quality HTML Template &
                    Woocommerce,
                    Shopify Themes.
                </p>
            </div>
            <div class="offcanvas-component first-child">
                <span class="offcanvas-component_title">Currency</span>
                <ul class="offcanvas-component_menu">
                    <li><a href="javascript:void(0)">EUR</a></li>
                    <li><a href="javascript:void(0)">GBP</a></li>
                    <li class="active"><a href="javascript:void(0)">USD</a></li>
                </ul>
            </div>
            <div class="offcanvas-component">
                <span class="offcanvas-component_title">Language</span>
                <ul class="offcanvas-component_menu">
                    <li class="active"><a href="javascript:void(0)">English</a></li>
                    <li><a href="javascript:void(0)">French</a></li>
                </ul>
            </div>
            <div class="offcanvas-component">
                <span class="offcanvas-component_title">My Account</span>
                <ul class="offcanvas-component_menu">
                    <li><a href="my-account.html">Register</a></li>
                    <li><a href="login-register.html">Login</a></li>
                </ul>
            </div>
            <div class="offcanvas-inner-social_link">
                <div class="munoz-social_link">
                    <ul>
                        <li class="facebook">
                            <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank"
                                title="Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com/" data-toggle="tooltip" target="_blank"
                                title="Twitter">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li class="youtube">
                            <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank"
                                title="Youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="google-plus">
                            <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank"
                                title="Google Plus">
                                <i class="fab fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="instagram">
                            <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-minicart_wrapper" id="miniCart">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
            <div class="minicart-content">
                <div class="minicart-heading">
                    <h4>Shopping Cart</h4>
                </div>
                <ul class="minicart-list">
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i
                                class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img src="{{ asset('frontend/images/product/small-size/1.jpg') }}" alt="Munoz's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">Barbeku</a>
                            <span class="product-item_quantity">1 x $25.00</span>
                        </div>
                    </li>
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i
                                class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img src="{{ asset('frontend/images/product/small-size/2.jpg') }}" alt="Munoz's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">Fried chicken</a>
                            <span class="product-item_quantity">2 x $120.00</span>
                        </div>
                    </li>
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i
                                class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img src="{{ asset('frontend/images/product/small-size/3.jpg') }}" alt="Munoz's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">Pizza</a>
                            <span class="product-item_quantity">1 x $80.00</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="minicart-item_total">
                <span>Subtotal</span>
                <span class="ammount">$225.00</span>
            </div>
            <div class="minicart-btn_area">
                <a href="cart.html" class="munoz-btn munoz-btn_dark munoz-btn_fullwidth">Minicart</a>
            </div>
            <div class="minicart-btn_area">
                <a href="checkout.html" class="munoz-btn munoz-btn_dark munoz-btn_fullwidth">Checkout</a>
            </div>
        </div>
    </div>
    <div class="offcanvas-search_wrapper" id="searchBar">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                <!-- Begin Offcanvas Search Area -->
                <div class="offcanvas-search">
                    <form action="#" class="hm-searchbox">
                        <input type="text" placeholder="Search for item...">
                        <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- Offcanvas Search Area End Here -->
            </div>
        </div>
    </div>
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                <div class="offcanvas-inner_search">
                    <form action="#" class="hm-searchbox">
                        <input type="text" placeholder="Search for item...">
                        <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active"><a href="{{route('frontend.home.index')}}"><span
                                    class="mm-text">Home</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>