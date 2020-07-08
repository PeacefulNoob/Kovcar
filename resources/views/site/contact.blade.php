@extends('layouts.main')
@section('content')
    

<main>
    <!-- breadcrumb banner content area start -->
    <div class="banner-text-left lernen_banner large bg-contact">
        <div class="container">
            <div class="row">
                <div class="lernen_banner_title">
                    <h1>Kontakt: Kov-Car</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
									<span class="first-item">
									<a href="/">Početna</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item">Kontakt</span>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11764.114274695072!2d19.12325969872573!3d42.512200865934005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134dbfc751939eb7%3A0x6f3ef69d30196765!2zLCxLT1YtQ0FSIiDQlNCe0J4g0L7Qs9GA0LDQvdCw0Log0JTQsNC90LjQu9C-0LLQs9GA0LDQtA!5e0!3m2!1sen!2s!4v1594133641515!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="col-lg-12">
                    <div class="wrap-bg">
                        <div class="section-title with-p">
                            <h2>Tu smo za Vas! </h2>
                        </div>
                        <form method="post" action="/contact">

                            {{csrf_field() }}
                            <div>
                                <input class="input-text required-field" type="text" name="name" id="contactName"
                                       placeholder="Unesite Vaše ime i prezime" title="Vaše ime i prezime"/>
                            </div>
                            <div>
                                <input class="input-text required-field email-field" type="email" name="contactEmail"
                                       id="contactEmail" placeholder="Unesite Vaš Email" title="Your Email"/>
                            </div>
                            <div>
                                <input class="input-text required-field" type="text" name="subject" id="contactSubject"
                                       placeholder="Unesite temu" title="Your Subject"/>
                            </div>
                            <div>
                    <textarea class="input-text required-field" name="message" id="contactMessage"
                              placeholder="Vaša poruka" title="Your Message"></textarea>
                            </div>
                            <input class="color-two button" type="submit"
                                   value="Pošaljite poruku"/>
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
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <!-- 1 -->
                    <div class="single-features-light"><!-- single features -->
                        <div class="move text-center">
                            <!-- uses solid style -->
                            <i class="secondary-color fas fa-chalkboard-teacher fa-3x"></i>
                            <h4>Danilovgrad</h4>
                            <p>Nikšićki put, bb</p>
                            <div class="feature_link">
                                <a href="tel:069095581">Call Center <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end single features -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <!-- 2 -->
                    <div class="single-features-light"><!-- single features -->
                        <div class="move text-center">
                            <i class="secondary-color fas fa-chalkboard-teacher fa-3x"></i>
                            <h4>Kotor</h4>
                            <p>Radanovići , bb</p>
                            <div class="feature_link">
                                <a href="tel:069095581">Call Center <i class="fas fa-arrow-right"></i></a>
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