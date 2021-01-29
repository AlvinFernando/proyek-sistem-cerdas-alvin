<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!--Setting config title-->
        <title>{{config('xsekolah.title')}}</title>
        
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{asset('/frontend/assets')}}/img/favicon.png" rel="icon">
        <link href="{{asset('/frontend/assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{asset('/frontend/assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{asset('/frontend/assets')}}/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="{{asset('/frontend/assets')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="{{asset('/frontend/assets')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="{{asset('/frontend/assets')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="{{asset('/frontend/assets')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="{{asset('/frontend/assets')}}/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('/frontend/assets')}}/css/style.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: Mentor - v2.2.0
        * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="/">E-LEARNING</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('/frontend/assets')}}/img/logo.png" alt="" class="img-fluid"></a>-->

          

            <a href="/login" class="get-started-btn">LOGIN</a>

            </div>
        </header><!-- End Header -->

    @yield('content')

        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-top">
            <div class="container">
            <div class="container d-md-flex py-4">

            
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="http://www.facebook.com/pertiasiamalang" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            </>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{asset('/frontend/assets')}}/vendor/jquery/jquery.min.js"></script>
        <script src="{{asset('/frontend/assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/frontend/assets')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="{{asset('/frontend/assets')}}/vendor/php-email-form/validate.js"></script>
        <script src="{{asset('/frontend/assets')}}/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="{{asset('/frontend/assets')}}/vendor/counterup/counterup.min.js"></script>
        <script src="{{asset('/frontend/assets')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="{{asset('/frontend/assets')}}/vendor/aos/aos.js"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('/frontend/assets')}}/js/main.js"></script>

    </body>

</html>