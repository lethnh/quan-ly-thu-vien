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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/appAdmin.css') }}" rel="stylesheet">
    <link rel='icon' href='{{ asset('images/logo_square_200.png') }}' type='image/x-icon' />

    <link rel="stylesheet" href="{{asset('theme/global/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/global/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/site.min.css')}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('theme/global/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('theme/global/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('theme/global/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('theme/global/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('theme/global/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('theme/global/vendor/flag-icon-css/flag-icon.css')}}">
 


    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('theme/global/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/global/fonts/brand-icons/brand-icons.min.css')}}">
    <!-- Scripts -->
    <script src="{{asset('theme/global/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
        Breakpoints();
    </script>
    @yield('title')
</head>

<body class="animsition page-login-v3 page-register-v3 layout-full">

    {{-- Content --}}
    @yield('content')



    <!-- Core  -->
    <script src="{{asset('theme/global/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{asset('theme/global/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('theme/global/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{asset('theme/global/vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('theme/global/vendor/animsition/animsition.js')}}"></script>
    <script src="{{asset('theme/global/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{asset('theme/global/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
    <script src="{{asset('theme/global/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('theme/global/vendor/switchery/switchery.js')}}"></script>
    <script src="{{asset('theme/global/vendor/intro-js/intro.js')}}"></script>
    <script src="{{asset('theme/global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>

    <!-- Scripts -->
    <script src="{{asset('theme/global/js/Component.js')}}"></script>
    <script src="{{asset('theme/global/js/Plugin.js')}}"></script>
    <script src="{{asset('theme/global/js/Base.js')}}"></script>
    <script src="{{asset('theme/global/js/Config.js')}}"></script>

    <script src="{{asset('theme/assets/js/Section/Menubar.js')}}"></script>
    <script src="{{asset('theme/assets/js/Section/GridMenu.js')}}"></script>
    <script src="{{asset('theme/assets/js/Section/Sidebar.js')}}"></script>
    <script src="{{asset('theme/assets/js/Section/PageAside.js')}}"></script>
    <script src="{{asset('theme/assets/js/Plugin/menu.js')}}"></script>

    <script src="{{asset('theme/global/js/config/colors.js')}}"></script>
    <script src="{{asset('theme/assets/js/config/tour.js')}}"></script>

    <!-- Page -->
    <script src="{{asset('theme/assets/js/Site.js')}}"></script>
    <script src="{{asset('theme/global/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{asset('theme/global/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{asset('theme/global/js/Plugin/switchery.js')}}"></script>

    <script src="{{asset('theme/assets/examples/js/dashboard/v1.js')}}"></script>
    {{-- <script src="{{ asset('js/appAdmin.js') }}" defer></script> --}}
</body>

</html>