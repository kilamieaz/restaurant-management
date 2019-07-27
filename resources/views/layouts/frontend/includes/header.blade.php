<header>
    <div class="header-main_area header-main_area-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-5">
                    <div class="header-logo">
                        <a href="{{ route('frontend.home.index') }}">
                            <img src="{{ asset('frontend/images/menu/logo/1.png')}}" alt="Kilamieaz's Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8 d-none d-lg-block position-static">
                    <div class="main-menu_area">
                        <nav class="main_nav">
                            <ul>
                                <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                                <li><a href="{{ route('frontend.about.index') }}">About Us</a></li>
                                <li><a href="{{ route('frontend.contact.index') }}">Contact</a></li>
                                <li><a href="{{ route('product.index') }}">All Product</a></li>
                                <li><a href="{{ route('login') }}">Login Admin</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-7">
                    <div class="header-right_area">
                        <ul>
                            <li>
                                <a href="#offcanvasMenu" class="menu-btn toolbar-btn color--white d-none d-lg-block">
                                    <i class="ion-navicon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">
                                    <i class="ion-navicon"></i>
                                </a>
                            </li>
                        </ul>
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
                        <a href="{{ route('frontend.home.index') }}">
                            <img src="{{ asset('frontend/images/menu/logo/1.png') }}" alt="Kilamieaz's Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8 d-none d-lg-block position-static">
                    <div class="main-menu_area">
                        <nav class="main_nav">
                            <ul>
                                <li><a href="{{ route('frontend.home.index') }}">Home</a></li>
                                <li><a href="{{ route('frontend.about.index') }}">About Us</a></li>
                                <li><a href="{{ route('frontend.contact.index') }}">Contact</a></li>
                                <li><a href="{{ route('product.index') }}">All Product</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-7">
                    <div class="header-right_area">
                        <ul>
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