@extends('layouts.main')
@section('content')
    

<main>
    <!-- breadcrumb banner content area start -->
    <div class="banner-text-left lernen_banner large bg-contact">
        <div class="container">
            <div class="row">
                <div class="lernen_banner_title">
                    <h1>Contact: Agency</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
									<span class="first-item">
									<a href="index.html">Homepage</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item">Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb banner content area start -->




    <!-- contact area start -->
    <div id="contact">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="themeioan_contact_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24165.439839909446!2d-73.96573300822483!3d40.79104913796133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20New%20York%20City%2C%20New%20York%2C%20USA!5e0!3m2!1sde!2sat!4v1566634235404!5m2!1sde!2sat" width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="col-lg-12">
                    <div class="wrap-bg">
                        <div class="section-title with-p">
                            <h2>We’re Here To Help You</h2>
                        </div>
                        <form class="themeioan-form-contact form" id="contact-us-form">
                            <!-- Change Placeholder and Title -->
                            <div>
                                <input class="input-text required-field" type="text" name="contactName" id="contactName"
                                       placeholder="Name" title="Your Full Name"/>
                            </div>
                            <div>
                                <input class="input-text required-field email-field" type="email" name="contactEmail"
                                       id="contactEmail" placeholder="Email" title="Your Email"/>
                            </div>
                            <div>
                                <input class="input-text required-field" type="text" name="contactSubject" id="contactSubject"
                                       placeholder="Subject" title="Your Subject"/>
                            </div>
                            <div>
                    <textarea class="input-text required-field" name="contactMessage" id="contactMessage"
                              placeholder="Message" title="Your Message"></textarea>
                            </div>
                            <input class="color-two button" type="submit"
                                   value="Send Message"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
    <!-- contact area start -->
    <div id="features" class="wrap-bg wrap-bg-dark">
        <!-- .container -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <!-- 1 -->
                    <div class="single-features-light"><!-- single features -->
                        <div class="move">
                            <!-- uses solid style -->
                            <i class="secondary-color fas fa-chalkboard-teacher fa-3x"></i>
                            <h4><a href="#">Lucru HQ</a></h4>
                            <p>121 King Street, Melbourne Victoria 3000 Australia Call us Today, we give premium support to all customer.</p>
                            <div class="feature_link">
                                <a href="#">Call Center <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end single features -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <!-- 2 -->
                    <div class="single-features-light"><!-- single features -->
                        <div class="move">
                            <i class="secondary-color fas fa-chalkboard-teacher fa-3x"></i>
                            <h4><a href="#">Paris</a></h4>
                            <p>PO Box 16122 Collins Street West Victoria 8007 Australia Call us Today, we give premium support to all customer.</p>
                            <div class="feature_link">
                                <a href="#">Call Center <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end single features -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 ">
                    <!-- 3 -->
                    <div class="single-features-light"><!-- single features -->
                        <div class="move">
                            <i class="secondary-color fas fa-id-card fa-3x"></i>
                            <h4><a href="#">New York</a></h4>
                            <p>121 King Street, Melbourne Victoria 3000 Australia Call us Today, we give premium support to all customer.</p>
                            <div class="feature_link">
                                <a href="#">Call Center <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end single features -->
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </div>
    <!-- contact area end -->
    
</main>

@endsection