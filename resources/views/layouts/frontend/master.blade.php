<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || Restaurant - Sarkom</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/font-awesome.css') }}">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/fontawesome-stars.css') }}">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/ion-fonts.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/slick.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/animate.css') }}">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/jquery-ui.min.css') }}">
    <!-- Venobox.css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/venobox.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/nice-select.css')}}">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <link rel="stylesheet" href="frontend/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="frontend/css/plugins/plugins.min.css">
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!--<link rel="stylesheet" href="frontend/css/style.min.css">-->
    @stack('styles')

</head>

<body class="template-color-2">

    <div class="main-wrapper">

        <!-- Begin Loading Area -->
        @include('layouts.frontend.includes.loading')
        <!-- Loading Area End Here -->

        <!-- Begin Munoz's Header Main Area Two -->
        @include('layouts.frontend.includes.header')
        <!-- Munoz's Header Main Area Two End Here -->

        @yield('content')

        <!-- Begin Munoz's Footer Area -->
        @include('layouts.frontend.includes.footer')
        <!-- Munoz's Footer Area End Here -->
        <!-- Begin Munoz's Modal Area -->
        @include('layouts.frontend.includes.modal')
        <!-- Munoz's Modal Area End Here -->

    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/particles.js') }}"></script>
    <script>
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    </script>
    <script type="text/javascript" src="{{ asset('js/lazyload.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("img.lazyload").lazyload();
        });
    </script>
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('frontend/js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>

    <!-- Slick Slider JS -->
    <script src="{{ asset('frontend/js/plugins/slick.min.js') }}"></script>
    <!-- Countdown JS -->
    <script src="{{ asset('frontend/js/plugins/countdown.js') }}"></script>
    <!-- Barrating JS -->
    <script src="{{ asset('frontend/js/plugins/jquery.barrating.min.js') }}"></script>
    <!-- Counterup JS -->
    <script src="{{ asset('frontend/js/plugins/jquery.counterup.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('frontend/js/plugins/jquery.nice-select.js') }}"></script>
    <!-- Sticky Sidebar JS -->
    <script src="{{ asset('frontend/js/plugins/jquery.sticky-sidebar.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('frontend/js/plugins/jquery-ui.min.js') }}"></script>
    <!-- jQuery UI Touch Punch -->
    <script src="{{ asset('frontend/js/plugins/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- Venobox JS -->
    <script src="{{ asset('frontend/js/plugins/venobox.min.js') }}"></script>
    <!-- Scroll Top JS -->
    <script src="{{ asset('frontend/js/plugins/scroll-top.js') }}"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="{{ asset('frontend/js/plugins/theia-sticky-sidebar.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('frontend/js/plugins/waypoints.min.js') }}"></script>
    <!-- ElevateZoom JS -->
    <script src="{{ asset('frontend/js/plugins/jquery.elevateZoom-3.0.8.min.js') }}"></script>
    <!-- Images loaded JS -->
    <script src="{{ asset('frontend/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('frontend/js/plugins/isotope.pkgd.min.js') }}"></script>
    <!-- Ajax Mail JS -->
    <script src="{{ asset('frontend/js/ajax-mail.js') }}"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="frontend/js/vendor/vendor.min.js"></script>
<script src="frontend/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
