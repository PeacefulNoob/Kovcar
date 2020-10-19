@extends('layouts.main')
@section('head_index')
<title>  Kov Car | Tehnički pregled </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Zvanična Kov-Car® stranica. Saznajte više o najnovijim Jeep® modelima i promocijama, specifikacijama i performansama. Zakažite test ..."/>
<meta name="keywords" content="modeli,vozila,automobili,jeep,wrangler,fiat,fiat500,abarth,alfa,romeo,giulia,stelvio"/>
<meta name="author" content="PeacefulNoob"/>

<meta property="og:image" content="http://kov-car.me/assets/images/content/site/output-onlinepngtools.png" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://kov-car.me/service"/>
<meta property="og:title" content="Kov Car | Tehnički pregled"  />
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

    <!-- breadcrumb banner content area start -->
    <div class="banner-text-left lernen_banner large bg-contact">
        <div class="container">
            <div class="row">
                <div class="lernen_banner_title">
                    <h1>Tehnički pregled: Kov-Car</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
                            <span class="first-item">
                                <a href="/">Početna</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item"> Tehnički pregled</span>
                        </div>
                    </div>
                </div>


            </div>
            @include('components.message')
        </div>
    </div>
    <!-- end breadcrumb banner content area start -->
    <div class="container">


        <div class="row promo my-5">


                <div class="col-md-6 m-auto col-md-offset-3">
                    <p class="hide-on-submit"><span>Molimo popunite polja ispod kako bi zakazali Tehnički pregled:</span>
                        <div class="success-div"></div>
                        <br>
                        <form action="{{ route('service') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="name" id="firstName"
                                        placeholder="Unesite Vaše ime">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="surname" id="lastName"
                                        placeholder="Unesite Vaše prezime">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Unesite Vaš email (ovo polje je obavezno)">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="city" id="city"
                                        placeholder="Unesite Vaš grad">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="tel" id="tel"
                                        placeholder="Unesite Vaš telefon">
                                </div>
                            </div>
                     
               
                            <div class="form-group">
                                <div class="col-md-12">

                                    Predstavnici Kovcar-a će Vas kontaktirati radi
                                    preciziranja termina.
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" name="Submit" id="form-btn"
                                        class="btn btn-default form-btn">Pošalji
                                        <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
            </div>

            <div class="col-md-6">
                <img style="border-radius: 5px;" src="assets/images/content/1602061270701483.jpg" alt="">
                <div class="sliderOverlaymap"></div>
            </div>
            <br>
            <br>
            <br>
        </div>


    </div>
</main>
@endsection
