<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->


    <!-- Styles -->
    <link rel='icon' href='{{ asset('images/logo_square_200.png') }}' type='image/x-icon' />
    <link rel="stylesheet" href="{{asset('html/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('html/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('html/css/styles.css')}}">


    <script src="{{asset('theme/global/vendor/jquery/jquery.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    @yield('title')
</head>

<body class="animsition page-profile dashboard site-menubar-unfold">

    {{-- <div id="app"> --}}
    {{-- Header --}}
    @include('frontend.layouts.site.header')
    @yield('content')
    @include('frontend.layouts.site.footer')
    {{-- </div> --}}


    <script src="{{asset('html/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('html/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('html/js/custom.js')}}"></script>
</body>

</html>