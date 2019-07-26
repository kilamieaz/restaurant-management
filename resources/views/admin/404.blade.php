<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
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


<body class="header-fixed sidebar-static sidebar-dark header-light" id="body">

    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

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
            <div class="content-wrapper">
                <div class="content">
                    <div class="error-wrapper rounded border bg-white px-5">
                        <div class="row justify-content-center">
                            <div class="col-xl-4">
                                <h1 class="text-primary bold error-title">404</h1>
                                <p class="pt-4 pb-5 error-subtitle">Looks like something went wrong.</p>
                                <a href="{{ route('frontend.home.index') }}" class="btn btn-primary btn-pill">Back to Home</a>
                            </div>
                            <div class="col-xl-6 pt-5 pt-xl-0 text-center">
                                <img src="{{ asset('image/lightenning.png') }}" class="img-responsive" alt="Error Page Image">
                            </div>
                        </div>
                    </div>
                </div>




            </div>

            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                        <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
                    </p>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;

                </script>
            </footer>

        </div>
    </div>

    <script src="assets/plugins/jquery/jquery.min.js"></script>



    <script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/jekyll-search.min.js"></script>



    <script src="assets/js/sleek.bundle.js"></script>

</body>

</html>
