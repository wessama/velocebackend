<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Preloader CSS-->
    <style>#preloader:after,#preloader:before{content:"";display:block;left:-1px;top:-1px}#preloader-overlayer,#preloader:after,#preloader:before{position:absolute;height:100%;width:100%}#preloader-overlayer{position:fixed;top:0;left:0;background-color:#d49c50;z-index:999}#preloader{height:40px;width:40px;position:fixed;top:50%;left:50%;margin-top:-20px;margin-left:-20px;z-index:9999}#preloader:before{-webkit-animation:rotation 1s linear infinite;animation:rotation 1s linear infinite;border:2px solid #d49c50;border-top:2px solid transparent;border-radius:100%}#preloader:after{border:1px solid rgba(255,255,255,.1);border-radius:100%}@media only screen and (min-width:768px){#preloader{height:60px;width:60px;margin-top:-30px;margin-left:-30px}#preloader:before{left:-2px;top:-2px;border-width:2px}}@media only screen and (min-width:1200px){#preloader{height:80px;width:80px;margin-top:-40px;margin-left:-40px}}@-webkit-keyframes rotation{from{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes rotation{from{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}</style>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

    @yield('styles')

    <!-- Google Maps JS-->
    @yield('header-scripts')
</head>

<body class="rn-preloader">
    <div id="preloader"></div>
    <div id="preloader-overlayer"></div>

    <!-- Header-->
    <x-header/>
    <!-- End Header-->

    <!-- Page Title-->
    @yield('title')

    <!-- Content-->
    @yield('content')

    <!-- Site Footer-->
    <x-footer/>
    <!-- End Site Footer-->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('js/starrr.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    @stack('footer-scripts')
</body>
</html>
