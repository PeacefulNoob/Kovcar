<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas Basic -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="description" content="Lucru - Education Services School Template"/>
    <meta name="keywords" content="Landing Page, Services, Learning"/>
    <meta name="author" content="Ioan Drozd"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>Kov-Car</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- owl carousel theme default CSS file -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- owl carousel CSS file -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Slick  -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- jQuery Fancybox  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
</head>
<body>
@include('layouts.header')



@yield('content')

<div class="sticky-cta clearfix " style="top: 155px; display: block;">
    <ul> 
     
     	<li class="sticky-cta-item visible-mobile">
            <!--  /content/jeep/jeep-rs/sr/car-configurator -->
             <a href="http://carconfigurator.jeep.com/rs_RS/" data-adobe="cta:shopping-tools:configurator" target="_self">
                 <span class="sticky-cta-item-info" style="display: none;">KONFIGURATOR</span>
                 <span class="sticky-cta-item-icon"><img src="/content/dam/jeep/crossmarket/shopping-tools/sticky-cta-car-configurator.png"></span>
             </a>
         </li>
     
     	<li class="sticky-cta-item visible-mobile">
            <!--  /content/jeep/jeep-rs/sr/jeep-brosure-i-cenovnici -->
             <a href="/jeep-brosure-i-cenovnici" data-adobe="cta:editorial:brochures" target="_self">
                 <span class="sticky-cta-item-info" style="display: none;">BROŠURA</span>
                 <span class="sticky-cta-item-icon"><img src="/content/dam/jeep/crossmarket/shopping-tools/sticky-cta-brochure.png"></span>
             </a>
         </li>
     
     	<li class="sticky-cta-item visible-mobile">
            <!--  /content/jeep/jeep-rs/sr/jeep-brosure-i-cenovnici -->
             <a href="/jeep-brosure-i-cenovnici" data-adobe="cta:editorial:brochures" target="_self">
                 <span class="sticky-cta-item-info" style="display: none;">CENOVNIK</span>
                 <span class="sticky-cta-item-icon"><img src="/content/dam/jeep/crossmarket/shopping-tools/sticky-cta-request-a-quote-new.png"></span>
             </a>
         </li>
     
     	<li class="sticky-cta-item visible-mobile">
            <!--  /content/jeep/jeep-rs/sr/test-drive -->
             <a href="/redirecting/redirect-test-drive#modelCode=684" data-adobe="cta:contact:test-drive-request" target="_self">
                 <span class="sticky-cta-item-info" style="display: none;">TEST VOŽNJA</span>
                 <span class="sticky-cta-item-icon"><img src="/content/dam/jeep/crossmarket/shopping-tools/sticky-cta-test-drive.png"></span>
             </a>
         </li>
     
     	<li class="sticky-cta-item visible-mobile">
            <!--  /content/jeep/jeep-rs/sr/dealer-locator -->
             <a href="/redirecting/redirect-dealer-locator" data-adobe="cta:shopping-tools:dealer-locator" target="_self">
                 <span class="sticky-cta-item-info" style="display: none;">PRONAĐITE DILERA</span>
                 <span class="sticky-cta-item-icon"><img src="/content/dam/jeep/crossmarket/shopping-tools/sticky-cta-dealer-locator.png"></span>
             </a>
         </li>
     
     	
     
     	
     
     	
     
    </ul>
</div>

@include('layouts.footer')


    <!-- JavaScript File -->
    <!-- jQuery -->
    <script src='assets/js/jquery-3.4.1.min.js'></script>
    <!-- Main -->
    <script src='assets/js/main.js'></script>
    <!-- Bootstrap -->
    <script src='assets/js/bootstrap.min.js'></script>
    <!-- Slick -->
    <script src='assets/js/slick.min.js'></script>
    <!-- Fancybox -->
    <script src='assets/js/jquery.fancybox.pack.js'></script>
    <!-- Magnific Popup core JS file -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Waypoints -->
    <script src='assets/js/waypoints.min.js'></script>
    <!-- Counterup -->
    <script src='assets/js/jquery.counterup.min.js'></script>
    <!-- owl carousel -->
    <script src='assets/js/owl.carousel.min.js'></script>
    

</body>
</html>