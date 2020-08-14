
@extends('layouts.main')
@section('content')
<main>
    <!-- Slider Start -->
     <!-- slider item 3 -->
     <div class="owl-navigation owl-carousel home_owl owl-theme ">

     <div class="item">
        <div class="position-center image-overly-dark-opacity header-content " role="banner">
            <img src="/assets/images/content/manuf_cover/jeep_cover.jpg" alt="" class="sliderImg">
<div class="sliderOverlay"></div>
            <div class="container tekstSlider opac">
                <div class="col-xs-12 col-sm-8  header-area">
                    <div class="header-area-inner header-text"> <!-- single content header -->
                        <h1 class="title">SVET AVANTURA ČEKA NA NAS</h1>
                        <p>Započnite vaše putovanje u vozilu koje je opremljeno za gotovo sve.</p>
                        <div class="btn-section text-center">
                            <a href="/contact" class="color-two btn-custom">Kontakt <i class="fas fa-arrow-right"></i></a>
                            <a href="/contact" class="join-button"><i class="fab fa-telegram-plane"></i> +382 69 09 55 81</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end slider item 3 -->
     <!-- slider item 3 -->
     <div class="item">
        <div class="position-center image-overly-dark-opacity header-content " role="banner">
            <img src="/assets/images/content/manuf_cover/jeep_cover.jpg" alt="" class="sliderImg">
            <div class="sliderOverlay"></div>

            <div class="container tekstSlider opac">
                <div class="col-xs-12 col-sm-8  header-area">
                    <div class="header-area-inner header-text"> <!-- single content header -->
                        <h1 class="title">SVET AVANTURA ČEKA NA NAS</h1>
                        <p>Započnite vaše putovanje u vozilu koje je opremljeno za gotovo sve.</p>
                        <div class="btn-section text-center">
                            <a href="/contact" class="color-two btn-custom">Kontakt <i class="fas fa-arrow-right"></i></a>
                            <a href="/contact" class="join-button"><i class="fab fa-telegram-plane"></i> +382 69 09 55 81</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end slider item 3 -->
        <!-- slider item 3 -->
        <div class="item">
            <div class="position-center image-overly-dark-opacity header-content " role="banner">
                <img src="/assets/images/content/manuf_cover/jeep_cover.jpg" alt="" class="sliderImg">
                <div class="sliderOverlay"></div>

                <div class="container tekstSlider opac">
                    <div class="col-xs-12 col-sm-8  header-area">
                        <div class="header-area-inner header-text"> <!-- single content header -->
                            <h1 class="title">SVET AVANTURA ČEKA NA NAS</h1>
                            <p>Započnite vaše putovanje u vozilu koje je opremljeno za gotovo sve.</p>
                            <div class="btn-section text-center">
                                <a href="/contact" class="color-two btn-custom">Kontakt <i class="fas fa-arrow-right"></i></a>
                                <a href="/contact" class="join-button"><i class="fab fa-telegram-plane"></i> +382 69 09 55 81</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end slider item 3 -->
    </div>
</div>
    <!-- Slider End-->
   <!-- projects area start -->
   <div id="projects-slider" class="wrap-bg  text-left">

    <div class="fullcontainer">
        <div class="row carousel-slider projects-slider">
            <!-- .row -->
            @foreach ($manufs as $manuf)
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 course-single mb20">
                <!-- 1 -->
                <div class="themeioan_services">
                    <article><!-- single services -->
                        <div class="blog-photo">
                           {{--  <div class="overlaylogo"></div> --}}
                            <a href="/manufacturer/{{$manuf->id}}"><img class="logoImg" src="/assets/images/content/manuf_logo/{{$manuf->logo_image}}" alt="Image {{$manuf->title}}"></a>
                        </div>
                        <div class="blog-content">
                            <h5 class="title"><a href="/manufacturer/{{$manuf->id}}">{{$manuf->title}}</a></h5>
                            <div class="my-2">
                                <a href="/manufacturer/{{$manuf->id}}" class="button-light"><i class="fas fa-arrow-right"></i> Saznaj vise</a>
                            </div>
                        
                        </div>
                    </article><!-- end single services -->
                </div>
            </div>
            @endforeach
                      
                                
            
            <!-- .row end -->
        </div>
    </div>
</div>
<!-- projects area end -->




    <!-- features area start -->
    <div id="features" class="wrap-bg wrap-bg-dark">
        <!-- .container -->
        <div class="container">
            <div class="post-heading-center section-title mb-60">
                <h2>Vrste usluga <br>
                  </h2>
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mbt30">
                    <!-- 1 -->
                    <div class="single-features-light"><!-- single features -->
                        <!-- uses solid style -->
                        <img class="icon-svg" alt="icon" src="">
                        <h4>Modern Construction Made by Lucru HTML.</h4>
                        <p>Lorem ipsum dolor sit amet, conset etur sadips cing elitr, sed diam nonumy eirmod tempor invi dunt ut labore buy it.</p>
                    </div><!--   -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mbt30">
                    <!-- 2 -->
                    <div class="single-features-light"><!-- single features -->
                        <!-- uses solid style -->
                        <img class="icon-svg" alt="icon" src="">
                        <h4>Complex Problems Change House dramatically.</h4>
                        <p>Lorem ipsum dolor sit amet, conset etur sadips cing elitr, sed diam nonumy eirmod tempor invi dunt ut labore buy it.</p>
                    </div><!--   -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mbt30">
                    <!-- 3 -->
                    <div class="single-features-light"><!-- single features -->
                        <!-- uses solid style -->
                        <img class="icon-svg" alt="icon" src="">
                        <h4>House Renovation Speed your Construction.</h4>
                        <p>Lorem ipsum dolor sit amet, conset etur sadips cing elitr, sed diam nonumy eirmod tempor invi dunt ut labore buy it.</p>
                    </div><!--   -->
                </div>
            </div>
            <!-- .row end -->
            <!-- .row -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mbt30">
                    <!-- 1 -->
                    <div class="single-features-light"><!-- single features -->
                        <!-- uses solid style -->
                        <img class="icon-svg" alt="icon" src="">
                        <h4>Modern Construction Made by Lucru HTML.</h4>
                        <p>Lorem ipsum dolor sit amet, conset etur sadips cing elitr, sed diam nonumy eirmod tempor invi dunt ut labore buy it.</p>
                    </div><!--   -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mbt30">
                    <!-- 2 -->
                    <div class="single-features-light"><!-- single features -->
                        <!-- uses solid style -->
                        <img class="icon-svg" alt="icon" src="">
                        <h4>Complex Problems Change House dramatically.</h4>
                        <p>Lorem ipsum dolor sit amet, conset etur sadips cing elitr, sed diam nonumy eirmod tempor invi dunt ut labore buy it.</p>
                    </div><!--   -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mbt30">
                    <!-- 3 -->
                    <div class="single-features-light"><!-- single features -->
                        <!-- uses solid style -->
                        <img class="icon-svg" alt="icon" src="">
                        <h4>House Renovation Speed your Construction.</h4>
                        <p>Lorem ipsum dolor sit amet, conset etur sadips cing elitr, sed diam nonumy eirmod tempor invi dunt ut labore buy it.</p>
                    </div><!--   -->
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>
    <!-- features area end -->


  

    <div id="why-us" class="slider-bg11 ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-5">
                    
                    <img src="/assets/images/content/site/IvecoFirma.jpg" class="aboutImage"alt="">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-7 mt-4 mb-5">
                    <div class="section-title">
                        <div class="container-black oNama">
                            <span>O nama</span>
                            <h2>Kov-Car

                            </h2>
                            <p>Kompanija KOV-CAR osnovana je 11.06.2012. godine sa sedištem u Tivtu, Industrijska zona bb. Firma je u vlasništvu porodice Kovinić, koja je privatnim biznisom počela da se bave još od 1990. godine, nakon povratka iz Švajcarske. Osnovna djelatnost firme je prodaja i servis vozila.</p>

                            <div class="call-to-action-btn">
                                <a href="/about" class="btn-custom">Opširnije <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>

@endsection