<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Restaurant Sarkom') }}</title>
    <!-- Scripts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">

    @stack('styles')
    <script type="text/javascript" src="{{ asset('js/nprogress.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lazyload.js') }}"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();

    </script>
    <div id="app">

        <div class="mobile-sticky-body-overlay"></div>
        <div class="wrapper">
            <!-- Github Link -->
            <a href="https://github.com/kilamieaz/restaurant-management" class="github-link">
                <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
                    <defs>
                        <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
                </svg>
                <i class="mdi mdi-github-circle"></i>
            </a>
            <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
            @include('layouts.admin.includes.sidebar')
            <div class="page-wrapper">
                <!-- Header -->
                @include('layouts.admin.includes.header')

                <div class="content-wrapper">
                    <div class="content">
                        {{-- <div class="row">
                        <div class="col-md-12">
                            @yield('content')
                        </div>
                    </div> --}}
                        @yield('content')
                    </div>
                </div>

                @include('layouts.admin.includes.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/moment.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("img.lazyload").lazyload();
            $(".select2-dashboard").select2({
                ajax: {
                    url: '/searchable',
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.email,
                                    id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });
        });

    </script>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;

        //snabbt.js
        $('.btn').on('click', function (e) {
            var button = $(e.target);
            button.snabbt('attention', {
            rotation: [0, 0, Math.PI/2],
            springConstant: 1.9,
            springDeceleration: 0.9,
            });
        });

    </script>
    @stack('scripts')
</body>

</html>
