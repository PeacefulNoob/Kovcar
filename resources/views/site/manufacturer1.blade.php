@extends('layouts.main')
@section('head_index')
<title>  Kov Car | {{$manuf->title}} </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Zvanična Kov-Car® stranica. Saznajte više o najnovijim Jeep® modelima i promocijama, specifikacijama i performansama. Zakažite test ..."/>
<meta name="keywords" content="modeli,vozila,automobili,jeep,wrangler,fiat,fiat500,abarth,alfa,romeo,giulia,stelvio"/>
<meta name="author" content="PeacefulNoob"/>

<meta property="og:image" content="http://kov-car.me/assets/images/content/site/output-onlinepngtools.png" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://kov-car.me/manufacturer/". {{$manuf->id}} />
<meta property="og:title" content="Kov Car |   " . {{$manuf->title}}/>
<meta property="og:description" content=" Saznajte više o najnovijim modelima i promocijama. " />


<link rel="icon" type="image/png" href="/assets/images/content/site/output-onlinepngtools.png" />
<link rel="apple-touch-icon-precomposed" href="/assets/images/content/site/output-onlinepngtools.png" type="image/png" sizes="152x152" />
<link rel="apple-touch-icon-precomposed" href="/assets/images/content/site/output-onlinepngtools.png" type="image/png" sizes="120x120" />
<link rel="apple-touch-icon" href="/assets/images/content/site/output-onlinepngtools.png" sizes="180x180" />


<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@nytimesbits" />
<meta name="twitter:creator" content="@nickbilton" />

@endsection
@section('content')
    

<main>
  <!-- Slider Start -->
  <div class="owl-navigation owl-carousel slider_owl owl-theme ">
    <!-- slider item 1 -->
    <div class="item ">
        <div class="position-center image-overly-dark-opacity header-content " role="banner">
            <img src="/assets/images/content/slider/{{$slider->cover_image}}" alt="" class="sliderImg">
            <div class="container tekstSlider opac">
                <div class="col-xs-12 col-sm-8  header-area">
                    <div class="header-area-inner header-text manufH"> <!-- single content header -->
                        <h1 class="title">{{$slider->cover_image_text}}</h1>
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
                    <div class="header-area-inner header-text manufH"> <!-- single content header -->
                        <h1 class="title">{{$slider->cover_image1_text}}</h1>
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
                    <div class="header-area-inner header-text manufH"> <!-- single content header -->
                        <h1 class="title">{{$slider->cover_image2_text}}</h1>
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
@if ($manuf->id=='5')
   <!-- projects area start -->
   <div id="projects-slider" class="wrap-bg wrap-bg-dark text-left dark">
    <div class="fullcontainer">
        <div class="row carousel-slider projects-slider-alfa">
            <!-- .row -->
            @foreach ($models as $model)
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 course-single ">
                <!-- 1 -->
                <div class="themeioan_services">
                    <article><!-- single services -->
                        <div class="blog-photo">
                            <a href="/model/{{$model->id}}"><img class="modelLogo" src="/assets/images/content/model/logo/{{$model->logo_image}}" alt="Logo {{$model->title}}"></a>
                        </div>
                        <div class="blog-content">
                            <h5 class="title"><a href="/model/{{$model->id}}">{{$model->title}}</a>
                            </h5>
                            <div class="my-2">
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
<!-- projects area end -->
@else
   <!-- projects area start -->
   <div id="projects-slider" class="wrap-bg wrap-bg-dark text-left">
        <div class="fullcontainer">
            <div class="row carousel-slider projects-slider">
                <!-- .row -->
                @foreach ($models as $model)
                @if (($model->isActive) === 1)
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 course-single ">
                        <!-- 1 -->
                        <div class="themeioan_services">
                            <article><!-- single services -->
                                <div class="blog-photo">
                                    <a href="/model/{{$model->id}}"><img class="modelLogo" src="/assets/images/content/model/logo/{{$model->logo_image}}" alt="Logo {{$model->title}}"></a>
                                </div>
                                <div class="blog-content">
                                    <h5 class="title"><a href="/model/{{$model->id}}">{{$model->title}}</a>
                                    </h5>
                                    <div class="my-2">
                                        <a href="/model/{{$model->id}}" class="button-light"><i class="fas fa-arrow-right"></i> Saznaj vise</a>
                                    </div>
                                </div>
                            </article><!-- end single services -->
                        </div>
                    </div>
                @endif
                @endforeach
                <!-- .row end -->
       
            </div>
        </div>
    </div>
   <!-- projects area end -->
   @endif
   @if ($manuf->description1)
       
   
<!-- features area start -->
<div id="features" class="wrap-bg">
    <!-- .container -->
    <div class="overlayHistory"></div>
    <img src="/assets/images/content/model/history/{{$manuf->brochure_pdf}}" class="backgroundImage" alt="">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 zi3">
                <!-- .row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mbt30">
                        <!-- 1 -->
                        <div class="single-features-light allTime"><!-- single features -->
                            <h4>Istorija</h4>
                            <p>{!!$manuf->description1!!}
                                </p>
                        </div><!--   -->
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
    </div>
    <!-- .container end -->
</div>
<!-- features area end -->
@endif
<!-- projects area end -->
<div id="why-us" class="wrap-bg-dark py-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-6 s  image-margin-50">
            <img src="/assets/images/content/model/{{$manuf->image2}}" class="sliderImg" alt="">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-6 wrap-padding text-left">
            <img src="/assets/images/content/manuf_logo/{{$manuf->logo_image}}" alt="" class="logoBack">

            <div class="width400">
                <div class="section-title with-p">
                    <div>
                        <h2>Opis brenda</h2>
                    </div>
                </div>
                <p>{{$manuf->description2}}</p>
            
            </div>
        </div>
    </div>
</div>
@if ($manuf->id=='4')
    @include('components.fiatp')
@else
 <!-- Slider Start -->
<div class="relative pt-3">
    <h2 class = "text-center pt-5">Galerija</h2>
    <div class="owl-navigation owl-carousel gallery_owl owl-theme">
        @foreach ($images as $image)
            
        <!-- slider item 1 -->
        <div class="item aaad">
            <div class="header-content galleryS " role="banner">
                <img src="/assets/images/content/model/{{$image->image}}" class="galeryFull slidfe" alt="">

            </div>
        </div><!-- end slider item 1 -->
  
        @endforeach

      
    </div>
</div>
<!-- Slider End-->
@endif






</main>

@endsection