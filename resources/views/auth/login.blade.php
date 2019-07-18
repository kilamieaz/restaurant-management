<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
        <script src="{{ asset('js/app.js') }}"></script>
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
    </head>

</head>

<body class="" id="body">
    <div class="container d-flex flex-column justify-content-between vh-100">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="app-brand">
                            <a href="#">
                                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                                    </g>
                                </svg>
                                <span class="brand-name">Sistem Restaurant</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">

                        <h4 class="text-dark mb-5">Sign In</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" id="email"
                                        class="form-control input-lg @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autofocus placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 ">
                                    <input type="password" id="password"
                                        class="form-control input-lg @error('password') is-invalid @enderror"
                                        name="password" required placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex my-2 justify-content-between">
                                        <div class="d-inline-block mr-3">
                                            <label class="control control-checkbox">Remember me
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <div class="control-indicator"></div>
                                            </label>

                                        </div>
                                        @if (Route::has('password.request'))
                                        <p><a class="text-blue" href="{{ route('password.request') }}">Forgot Your
                                                Password?</a></p>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright pl-0">
            <p class="text-center">&copy; 2019 Copyright
                <a class="text-primary" href="https://github.com/kilamieaz" target="_blank">Kilamieaz</a>.
            </p>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/moment.js') }}"></script>
    @stack('scripts')
</body>

</html>
