<!DOCTYPE html>
<html>

<head>
    @yield('head-content-top')
    @include('partial.head')
    @yield('head-content-bottom')
</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay
    data-plugin-options="{'hideDelay': 500}">

    <div class="body">
        @include('partial.nav')
        @yield('body-content')
        @include('partial.footer')
    </div>

    <!-- Vendor -->
    @yield('vednor-script-content-top')

    <script src={{ asset('vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('vendor/jquery.appear/jquery.appear.min.js') }}></script>
    <script src={{ asset('vendor/jquery.easing/jquery.easing.min.js') }}></script>
    <script src={{ asset('vendor/jquery.cookie/jquery.cookie.min.js') }}></script>
    <script src={{ asset('vendor/popper/umd/popper.min.js') }}></script>
    <script src={{ asset('vendor/bootstrap/js/bootstrap.min.js') }}></script>
    <script src={{ asset('vendor/common/common.min.js') }}></script>
    <script src={{ asset('vendor/jquery.validation/jquery.validate.min.js') }}></script>
    <script src={{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}></script>
    <script src={{ asset('vendor/jquery.gmap/jquery.gmap.min.js') }}></script>
    <script src={{ asset('vendor/jquery.lazyload/jquery.lazyload.min.js') }}></script>
    <script src={{ asset('vendor/isotope/jquery.isotope.min.js') }}></script>
    <script src={{ asset('vendor/owl.carousel/owl.carousel.min.js') }}></script>
    <script src={{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}></script>
    <script src={{ asset('vendor/vide/jquery.vide.min.js') }}></script>
    <script src={{ asset('vendor/vivus/vivus.min.js') }}></script>

    <!-- Theme Base, Components and Settings -->
    <script src={{ asset('js/theme.js') }}></script>

    <!-- Current Page Vendor and Views -->
    <script src={{ asset('vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}></script>
    <script src={{ asset('js/views/view.home.js') }}></script>

    <!-- Theme Custom -->
    <script src={{ asset('js/custom.js') }}></script>


    <!-- Theme Initialization Files -->
    <script src={{ asset('js/theme.init.js') }}></script>

    @yield('vednor-script-content-bottom')

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
  <script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

   ga('create', 'UA-12345678-1', 'auto');
   ga('send', 'pageview');
  </script>
  -->

</body>

</html>
