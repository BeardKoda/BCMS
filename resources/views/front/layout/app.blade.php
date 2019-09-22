<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} || @yield('title')</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/icon-48x48.png" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendors/bootstrap-selector/css/bootstrap-select.min.css') }}">
    <!--icon font css-->
    <link rel="stylesheet" href="{{ asset('front/vendors/themify-icon/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendors/elagent/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendors/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendors/animation/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendors/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendors/magnify-pop/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendors/nice-select/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendors/scroll/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <div class="body_wrapper">
        @include('front.layout.preloader')
        @include('front.layout.header')
        @yield('content')
        @include('front.layout.footer')
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('front/js/jquery-3.2.1.min.js') }}" ></script>
    <script src="{{ asset('front/js/propper.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/vendors/bootstrap-selector/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('front/vendors/wow/wow.min.js') }}"></script>
    <script src="{{ asset('front/vendors/sckroller/jquery.parallax-scroll.js') }}"></script>
    <script src="{{ asset('front/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('front/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/vendors/isotope/isotope-min.js') }}" ></script>
    <script src="{{ asset('front/vendors/magnify-pop/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/js/plugins.js') }}" ></script>
    <script src="{{ asset('front/vendors/scroll/jquery.mCustomScrollbar.concat.min.js') }}" ></script>
    @yield('scripts')
    <script src="{{ asset('front/js/main.js') }}" defer></script>
</body>
</html>
