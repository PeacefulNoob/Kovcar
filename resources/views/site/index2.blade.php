
@extends('layouts.main')
@section('content')
<main>
    <!-- Slider Start -->
     <!-- slider item 3 -->
     <div class="owl-navigation owl-carousel slider_owl owl-theme ">
        <!-- slider item 1 -->
        <div class="item ">
            <div class="position-center image-overly-dark-opacity header-content " role="banner">
                <img src="/assets/images/content/slider/{{$slider->cover_image}}" alt="" class="sliderImg">
                <div class="container tekstSlider opac">
                    <div class="col-xs-12 col-sm-8  header-area">
                        <div class="header-area-inner header-text"> <!-- single content header -->
                            <h1 class="title">{{$slider->cover_image_text}}</h1>
                            <p>Započnite vaše putovanje u vozilu koje je opremljeno za gotovo sve. Kontaktirajte nas !</p>
                            <div class="btn-section text-center">
                                <a href="/contact" class="color-two btn-custom">Kontakt <i class="fas fa-arrow-right"></i></a>
                                <a href="/contact" class="join-button"><i class="fab fa-telegram-plane"></i> +382 69 09 55 81</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end slider item 1 -->
        <!-- slider item 2 -->
        <div class="item">
            <div class="position-center image-overly-dark-opacity header-content " role="banner">
                <img src="/assets/images/content/slider/{{$slider->cover_image1}}" alt="" class="sliderImg">
    
                <div class="container tekstSlider opac">
                    <div class="col-xs-12 col-sm-8  header-area">
                        <div class="header-area-inner header-text"> <!-- single content header -->
                            <h1 class="title">{{$slider->cover_image1_text}}</h1>
                            <p>Započnite vaše putovanje u vozilu koje je opremljeno za gotovo sve. Kontaktirajte nas !</p>
                            <div class="btn-section text-center">
                                <a href="/contact" class="color-two btn-custom">Kontakt <i class="fas fa-arrow-right"></i></a>
                                <a href="/contact" class="join-button"><i class="fab fa-telegram-plane"></i> +382 69 09 55 81</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end slider item 2 -->
        <!-- slider item 3 -->
        <div class="item">
            <div class="position-center image-overly-dark-opacity header-content " role="banner">
                <img src="/assets/images/content/slider/{{$slider->cover_image2}}" alt="" class="sliderImg">
    
                <div class="container tekstSlider opac">
                    <div class="col-xs-12 col-sm-8  header-area">
                        <div class="header-area-inner header-text"> <!-- single content header -->
                            <h1 class="title">{{$slider->cover_image2_text}}</h1>
                            <p>Započnite vaše putovanje u vozilu koje je opremljeno za gotovo sve. Kontaktirajte nas !</p>
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
                    <div class="single-features-light text-center"><!-- single features -->
                        <!-- uses solid style -->
                        <img class="icon-svg" alt="icon" src="/assets/images/content/image001.png">
                        <h4>PRODAJA NOVIH VOZILA</h4>
                    </div><!--   -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mbt30">
                    <!-- 2 -->
                    <div class="single-features-light text-center"><!-- single features -->
                        <!-- uses solid style -->
                        <img class="icon-svg m-auto" alt="icon" src="/assets/images/content/image002.png">
                        <h4>PRODAJA POLOVNIH VOZILA</h4>
                    </div><!--   -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mbt30">
                    <!-- 3 -->
                    <div class="single-features-light text-center"><!-- single features -->
                        <!-- uses solid style -->
                        <img class="icon-svg" alt="icon" src="/assets/images/content/image003.png">
                        <h4>SERVIS VOZILA</h4>
                    </div><!--   -->
                </div>
            </div>
            <!-- .row end -->
            <!-- .row -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mbt30">
                    <!-- 1 -->
                    <div class="single-features-light text-center"><!-- single features -->
                        <!-- uses solid style -->
                        <img class="icon-svg" alt="icon" src="/assets/images/content/image004.png">
                        <h4>POSTPRODAJNE USLUGE</h4>
                    </div><!--   -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mbt30">
                    <!-- 2 -->
                    <div class="single-features-light text-center"><!-- single features -->
                        <!-- uses solid style -->
                        <img class="icon-svg" alt="icon" src="/assets/images/content/image005.png">
                        <h4>TEHNICKI PREGLED</h4>
                    </div><!--   -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mbt30">
                    <!-- 3 -->
                    <div class="single-features-light text-center"><!-- single features -->
                        <!-- uses solid style -->
                        <img class="icon-svg" alt="icon" src="/assets/images/content/image005.png">
                        <h4>REGISTRACIJA VOZILA</h4>
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-7 col-lg-7">
                    
                    <img src="/assets/images/content/firma.jpeg" class="aboutImage"alt="">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-5 col-lg-5 mt-4 mb-5">
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