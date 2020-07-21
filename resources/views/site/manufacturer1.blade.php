@extends('layouts.main')
@section('content')
    

<main>
  <!-- Slider Start -->
  <div class="owl-navigation owl-carousel owl-theme ">
    <!-- slider item 1 -->
    <div class="item ">
        <div class="position-center image-overly-dark-opacity header-content " role="banner">
            <img src="/assets/images/content/manuf_cover/{{$manuf->cover_image}}" alt="" class="sliderImg">
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
    </div><!-- end slider item 1 -->
    <!-- slider item 2 -->
    <div class="item">
        <div class="position-center image-overly-dark-opacity header-content " role="banner">
            <img src="/assets/images/content/manuf_cover/{{$manuf->cover_image}}" alt="" class="sliderImg">

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
    </div><!-- end slider item 2 -->
    <!-- slider item 3 -->
    <div class="item">
        <div class="position-center image-overly-dark-opacity header-content " role="banner">
            <img src="/assets/images/content/manuf_cover/{{$manuf->cover_image}}" alt="" class="sliderImg">

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
<!-- Slider End-->
   <!-- projects area start -->
   <div id="projects-slider" class="wrap-bg wrap-bg-dark text-left">
 
    <div class="fullcontainer">
        <div class="row carousel-slider projects-slider">
            <!-- .row -->
            @foreach ($models as $model)
                
           
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 course-single mb20">
                <!-- 1 -->
                <div class="themeioan_services">
                    <article><!-- single services -->
                        <div class="blog-photo">
                            <a href="/model/{{$model->id}}"><img src="/assets/images/content/model/{{$model->logo_image}}" alt="Logo {{$model->title}}"></a>
                        </div>
                        <div class="blog-content">
                            <h5 class="title"><a href="/model/{{$model->id}}">{{$model->title}}</a>
                            </h5>
                            <div class="mt-25">
                                <a href="/model/{{$model->id}}" class="button-light"><i class="fas fa-arrow-right"></i> Saznaj vise</a>
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

<!-- features area start -->
<div id="features" class="wrap-bg">
    <!-- .container -->
    <div class="container">

        <div class="row">
  
            <div class="col-lg-12">
                <!-- .row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mbt30">
                        <!-- 1 -->
                        <div class="single-features-light"><!-- single features -->
                         

                            <h4>Istorija</h4>
                            <p>{{$manuf->description1}}
                                </p>
                        </div><!-- end single features -->
                    </div>
                   
                </div>
                <!-- .row end -->
            </div>
        </div>
    </div>
    <!-- .container end -->
</div>
<!-- features area end -->

<!-- projects area end -->
<div id="why-us" class="wrap-bg-dark my-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-6 s  image-margin-50">
            <img src="/assets/images/content/manuf/{{$manuf->cover_image}}" class="sliderImg" alt="">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-6 wrap-padding text-left">
            <div class="width400">
                <div class="section-title with-p">
                    <div>
                        <h2>Opis marke</h2>
                    </div>
                </div>
                <p>{{$manuf->description2}}</p>
            
            </div>
        </div>
    </div>
</div>


 <!-- Slider Start -->
<div class="relative pt-5">
    <h2 class = "text-center pt-5">Galerija</h2>
    <div class="owl-navigation owl-carousel owl-theme">
        @foreach ($images as $image)
            
        <!-- slider item 1 -->
        <div class="item">
            <div class="header-content " role="banner">
                <img src="/assets/images/content/All/{{$image->image}}" class="sliderImg" alt="">

            </div>
        </div><!-- end slider item 1 -->
  
        @endforeach

      
    </div>
</div>
<!-- Slider End-->







</main>

@endsection