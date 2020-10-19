<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas Basic -->
    @yield('head_index')

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/content/site/logoBrowser.png" type="image/x-icon">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- owl carousel theme default CSS file -->
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <!-- owl carousel CSS file -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- Slick  -->
    <link rel="stylesheet" href="/assets/css/slick.css">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <!-- jQuery Fancybox  -->
    <link rel="stylesheet" href="/assets/css/jquery.fancybox.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">



    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

</head>
<body>
@include('layouts.header')
<div id="loader-wrapper">
    <img id="loader" src="/assets/images/content/site/output-onlinepngtools.png " /> 
  </div>

@yield('content')
@include('layouts.test_drive')


@include('layouts.footer')


    <!-- JavaScript File -->
    <!-- jQuery -->
    <script src='/assets/js/jquery-3.4.1.min.js'></script>
    <!-- Main -->
    <script src='/assets/js/main.js'></script>
    <!-- Bootstrap -->
    <script src='/assets/js/bootstrap.min.js'></script>
    <!-- Slick -->
    <script src='/assets/js/slick.min.js'></script>
    <!-- Fancybox -->
    <script src='/assets/js/jquery.fancybox.pack.js'></script>
    <!-- Magnific Popup core JS file -->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Waypoints -->
    <script src='/assets/js/waypoints.min.js'></script>
    <!-- Counterup -->
    <script src='/assets/js/jquery.counterup.min.js'></script>
    <!-- owl carousel -->
    <script src='/assets/js/owl.carousel.min.js'></script>
    

</body>
</html>