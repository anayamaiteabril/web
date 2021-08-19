<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tranqui Cultivos | Productos para cultivo</title>
    <meta name="description" content="" />
    @include('front.partials.head')
    @yield('styles')
</head>
<body>
    @yield('navbar')

    @yield('content')

    @include('front.partials.footer')

    @include('front.partials.scripts')

    <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <!--EASING JS-->
        <script src="/js/jquery.easing.min.js"></script>
        <script src="/js/scrollspy.min.js"></script>
        <!--PORTFOLIO FILTER JS-->
        <script src="/js/isotope.js"></script>
        <!--TEXT ROTETE-->
        <script src="/js/jquery.simple-text-rotator.js"></script>
        <!-- Magnific Popup Js -->
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <!-- TYPED -->
        <script src="/js/typed.js"></script>
        <!-- OWL CAROUSEL -->
        <script src="/js/owl.carousel.min.js"></script>
        <!--CUSTOM JS-->
        <script src="/js/custom.js"></script>
        <script>
            $(".simple-text-rotate").textrotator({
                animation: "fade",
                speed: 3500
            });
        </script>

    @yield('scripts')

    @stack('scripts')
</body>
</html>
