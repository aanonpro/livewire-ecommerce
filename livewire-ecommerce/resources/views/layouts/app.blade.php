<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="author" content="ecommerce shop">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    {{-- link frontend --}}

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">


    {{-- end link frontend --}}

    @livewireStyles
</head>
<body>

    <div id="app">

        @include('frontend.inc.header')
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
         @include('frontend.inc.footer')

    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    {{-- link script frontend --}}
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.sticky.js')}}"></script>

    <!-- jQuery easing -->
    <script src="{{ asset('frontend/js/jquery.easing.1.3.min.js')}}"></script>

    <!-- Main Script -->
    <script src="{{ asset('frontend/js/main.js')}}"></script>

    <!-- Slider -->
    <script type="text/javascript" src="{{ asset('frontend/js/bxslider.min.js')}}"><script>
    <script type="text/javascript" src="{{ asset('frontend/js/script.slider.js')}}"></script>
    {{-- end script frontend --}}

    @livewireScripts
</body>
</html>
