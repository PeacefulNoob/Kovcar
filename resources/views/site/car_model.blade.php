@extends('layouts.main')
@section('content')
    

<main>
    <!-- why-us area start -->
    <div id="slider-modern" class="">
            <img src="/assets/images/content/model/{{$model->cover_image}}" alt="" class="sliderImg">

            <div class="row">
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-7 naSliderCar">
                    <div class="section-title">
                        <div class="container-black">
                            <span>{{$model->manufacturer}}</span>
                            <h2>{{$model->title}}</h2>
                            <p>Lorem ipsum dolor sit amet, quam felis adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme mus.</p>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- why-us area end -->

   <!-- projects area start -->
   <div class="table my-3">
    <div class="dx text-center">

<ul class="tabs clearfix" data-tabgroup="first-tab-group">

        @foreach ($model->packet as $packet)
        <li><a href="#{{$packet->id}}" class="active"><img class="icon-svg" alt="icon" src="/assets/images/content/model/packet/{{$packet->cover_image}}">
        <p> {{$packet->title}}</p>   </a></li>
        @endforeach
    
                
    </ul>
    </div>
</div>
<section id="first-tab-group" class="tabgroup">
    @foreach ($model->packet as $packet)
        
  <div id="{{$packet->id}}">
    <div  class="wrap-bg">
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mbt30">
                            <!-- 1 -->
                            <div class="single-features-light"><!-- single features -->
                                <!-- uses solid style -->
                                <img class="icon-svg" alt="icon" src="/assets/images/content/model/packet/{{$packet->cover_image}}">
                                <h4> {{$packet->title}}</h4>
                                <p> {!!$packet->description!!}</p>
                                <div class="container my-5">
                                    <div class="row">
                                        <div class="col-sm-3"><img class="packetImage" alt="icon" src="/assets/images/content/model/packet/{{$packet->image}}">     <h5 class="paketTekst"> {{$packet->imageD}}</h5></div>
                                        <div class="col-sm-3"><img class="packetImage" alt="icon" src="/assets/images/content/model/packet/{{$packet->image1}}"> <h5 class="paketTekst"> {{$packet->image1D}}</h5></div>
                                        <div class="col-sm-3"><img class="packetImage" alt="icon" src="/assets/images/content/model/packet/{{$packet->image2}}"> <h5 class="paketTekst"> {{$packet->image2D}}</h5></div>
                                        <div class="col-sm-3"><img class="packetImage" alt="icon" src="/assets/images/content/model/packet/{{$packet->image3}}"> <h5 class="paketTekst"> {{$packet->image3D}}</h5></div>
                                    </div>
                                </div>
                            </div><!-- end single features -->
                        </div>
                      </div>
                   
                    </div>
                </div>

                @endforeach

               
  

        <!-- .row end -->
</div>
  </div>

</section>
</div>
<!-- projects area end -->
<div id="slider-modern" class="  position-relative">
    <img src="/assets/images/content/model/{{$model->exterior_image}}" alt="" class="sliderImg">
    <div class="sliderOverlay1"></div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-7 naSliderCarLeft">
            <div class="section-title">
                <div class="container-black">
                <span>{{$model->title}}</span>
                    <h2>Spoljašnost</h2>
                <p>{!!$model->exterior_desc!!}</p>

               
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-5">
        </div>
    </div>
</div>
<!-- features area start -->
<div id="features" class="wrap-bg">
    <!-- .container -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
              
            </div>
            <div class="col-lg-12">
                <!-- .row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mbt30">
                        <!-- 1 -->
                        <div class="single-features-light"><!-- single features -->
                            <!-- uses solid style -->
                            <img class="icon-svg" alt="icon" src="/assets/images/content/model/{{$model->exterior_image}}" >
                            <p>{!!$model->exterior_desc1!!}</p>
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
{{-- /////// --}}
<div id="slider-modern" class="  position-relative">
    <img src="/assets/images/content/model/{{$model->interior_image}}" alt="" class="sliderImg">
    <div class="sliderOverlay1"></div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-6 col-lg-7 naSliderCar">
            <div class="section-title">
                <div class="container-black">
                <span>{{$model->title}}</span>
                    <h2>Unutrašnjost</h2>
                <p>{!!$model->interior_desc!!}</p>

               
            </div>
            </div>
        </div>
    </div>
    </div>
</div>


{{-- ///////////// --}}

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
                            <!-- uses solid style -->
                            <img class="icon-svg" alt="icon" src="/assets/images/content/model/{{$model->interior_image}}">
                            <p>{!!$model->interior_desc1!!}</p>
                        </div><!-- end single features -->
                    </div>
                 
                </div>
                <!-- .row end -->
            </div>
        </div>
    </div>
    <!-- .container end -->
</div>



<div id="why-us" class="wrap-bg-dark py-3">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-6   image-margin-50">
            <img src="/assets/images/content/model/{{$model->sec_image}}" class="sliderImg" alt="">
            <div class="sliderOverlay1"></div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-6 wrap-padding text-left">
          
                <div class="section-title with-p">
                    <div>
                        <h2>BEZBJEDNOST & SIGURNOST</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <p>{!!$model->sec_desc!!}</p>
                    <br>
                </div>
        
        </div>
    </div>
</div>
<div id="widget-call" class="call-to-action-area py-3 my-5 bg-cta">
    <div class="container opac">
        <div class="row justify-content-xl-between justify-content-lg-center justify-content-center">
            <div class="sticky-cta clearfix sideIcons" >
                <ul> 
                        <li class="sticky-cta-item visible-mobile">
                            <a href="/assets/pdf/{{$model->brochure}}" download="HTML 5 PDF">
                                <span class="sticky-cta-item-info" style="display: none;">BROŠURA</span>
                                <span class="sticky-cta-item-icon"><img src="/assets/images/content/buttons/sticky-cta-brochure.png"></span>
                            </a>
                        </li>
                    
                        <li class="sticky-cta-item visible-mobile">
                            <a href="/assets/pdf/{{$model->price_pdf}}"  target="new"  >
                                <span class="sticky-cta-item-info" style="display: none;">CENOVNIK</span>
                                <span class="sticky-cta-item-icon"><img src="/assets/images/content/buttons/sticky-cta-request-a-quote-new.png"></span>
                            </a>
                        </li>
                    
                        <li class="sticky-cta-item visible-mobile">
                            <a href="/test_drive" target="new"  >
                                <span class="sticky-cta-item-info" style="display: none;">TEST VOŽNJA</span>
                                <span class="sticky-cta-item-icon"><img src="/assets/images/content/buttons/sticky-cta-test-drive.png"></span>
                            </a>
                        </li>
                 
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="why-us" class="wrap-bg-dark py-3 my-5">
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-6 wrap-padding text-left">
          
                <div class="section-title with-p">
                    <div>
                        <h2>Dizajn</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <p>{!!$model->teh_desc!!}</p>
                </div>
        
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-6 services-detail-why  image-margin-50">
            <img src="/assets/images/content/model/{{$model->teh_image}}" class="sliderImg" alt="">
            <div class="sliderOverlay1"></div>

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
                <img src="/assets/images/content/model/{{$image->image}}" class="sliderImg slidfe" alt="">
                <div class="sliderOverlay1"></div>

            </div>
        </div><!-- end slider item 1 -->
  
        @endforeach

      
    </div>
</div>
<!-- Slider End-->




</main>

@endsection