<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
  @include('layouts.partials.header')
            @yield('content')
    </div>
  @include('layouts.partials.footer')
    <!-- javascript libraries -->
        <script  src="/js/jquery.js"></script>
        <script  src="/js/modernizr.js"></script>
        <script  src="/js/bootstrap.bundle.js"></script>
        <script  src="/js/jquery.easing.1.3.js"></script>
        <script  src="/js/skrollr.min.js"></script>
        <script  src="/js/smooth-scroll.js"></script>
        <script  src="/js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script  src="/js/bootsnav.js"></script>
        <script  src="/js/jquery.nav.js"></script>
        <!-- animation -->
        <script  src="/js/wow.min.js"></script>
        <!-- page scroll -->
        <script  src="/js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script  src="/js/swiper.min.js"></script>
        <!-- counter -->
        <script  src="/js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script  src="/js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script  src="/js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script  src="/js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script  src="/js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script  src="/js/classie.js"></script>
        <script  src="/js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script  src="/js/counter.js"></script>
        <!-- fit video  -->
        <script  src="/js/jquery.fitvids.js"></script>
        <!-- skill bars  -->
        <script  src="/js/skill.bars.jquery.js"></script>
        <!-- justified gallery  -->
        <script  src="/js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script  src="/js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script  src="/js/instafeed.min.js"></script>
        <!-- retina -->
        <script  src="/js/retina.min.js"></script>
        <!-- revolution -->
        <script  src="/js/jquery.themepunch.tools.min.js"></script>
        <script  src="/js/jquery.themepunch.revolution.min.js"></script>
        <script src="/js/main.js"></script>
</body>
</html>
