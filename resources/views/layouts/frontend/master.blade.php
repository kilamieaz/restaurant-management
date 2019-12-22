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
    {{-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico"> --}}

    <!-- CSS
	============================================ -->
    <link href="{{ asset('frontend/css/frontend.css') }}" rel="stylesheet">

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
    <script src="{{ asset('frontend/js/frontend.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lazyload.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("img.lazyload").lazyload();
            $('.product-img').hover(function () {
                $(this).addClass('magictime boingInUp');
            });
        });

    </script>
    @stack('scripts')
</body>

</html>
