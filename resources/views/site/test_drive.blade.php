@extends('layouts.main')
@section('head_index')
<title>  Kov Car | Test Vožnja </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Zvanična Kov-Car® stranica. Saznajte više o najnovijim Jeep® modelima i promocijama, specifikacijama i performansama. Zakažite test ..."/>
<meta name="keywords" content="modeli,vozila,automobili,jeep,wrangler,fiat,fiat500,abarth,alfa,romeo,giulia,stelvio"/>
<meta name="author" content="PeacefulNoob"/>

<meta property="og:image" content="http://kov-car.me/assets/images/content/site/output-onlinepngtools.png" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://kov-car.me/test_drive"/>
<meta property="og:title" content="Kov Car | Test Vožnja"  />
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
                    <h1>Test Vožnja: Kov-Car</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
                            <span class="first-item">
                                <a href="/">Početna</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item">Test Vožnja</span>
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


            <div class="col-12">
                <div class="col-md-6 m-auto col-md-offset-3">
                    <p class="hide-on-submit"><span>Molimo popunite polja ispod kako bi zakazali test vožnju:</span>
                        <div class="success-div"></div>
                        <br>
                        <form action="{{ route('test.drive') }}" method="post">
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
                                    <select id="god" name="god" class="form-control">
                                        <option value="">Unesite godinu rođenja:</option>
                                        <option value="2014">2018</option>
                                        <option value="2014">2017</option>
                                        <option value="2014">2016</option>
                                        <option value="2014">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                        <option value="1937">1937</option>
                                        <option value="1936">1936</option>
                                        <option value="1935">1935</option>
                                        <option value="1934">1934</option>
                                        <option value="1933">1933</option>
                                        <option value="1932">1932</option>
                                        <option value="1931">1931</option>
                                        <option value="1930">1930</option>
                                        <option value="1929">1929</option>
                                        <option value="1928">1928</option>
                                        <option value="1927">1927</option>
                                        <option value="1926">1926</option>
                                        <option value="1925">1925</option>
                                        <option value="1924">1924</option>
                                        <option value="1923">1923</option>
                                        <option value="1922">1922</option>
                                        <option value="1921">1921</option>
                                        <option value="1920">1920</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <input type="hidden" name="model" value=" ">-->
                            <div class="form-group">
                                <div class="">
                                    <div class="clearfix fiat-radio">

                                        <div class="col-md-12">
                                            <label for="model" class="control-label">Zainteresovan sam za
                                                model<sup>*</sup></label>
                                            <select id="model" name="model" class="form-control">
                                                <option value="">Izaberite model</option>
                                       
                                                <optgroup label="Fiat">
                                                    <option value="Fiat 500">
                                                        Fiat 500 </option>
                                                    <option value="Fiat 500c">
                                                        Fiat 500c </option>
                                                    <option value="Fiat 500x">
                                                        Fiat 500x </option>
                                                    <option value="Fiat 500L">
                                                        Fiat 500L </option>
                                                    <option value="Fiat 500L Cross">
                                                        Fiat 500L Cross </option>
                                                    <option value="Fiat 500L Wagon">
                                                        Fiat 500L Wagon </option>
                                                    <option value="Fiat TIPO HB">
                                                        Fiat TIPO HB </option>
                                                    <option value="Fiat TIPO SEDAN">
                                                        Fiat TIPO SEDAN </option>
                                                    <option value="Fiat TIPO SW">
                                                        Fiat TIPO SW </option>
                                                    <option value="Fiat PANDA">
                                                        Fiat PANDA </option>
                                                </optgroup>
                                                <optgroup label="Jeep">
                                                    <option value="Renegade">
                                                        Renegade </option>
                                                    <option value="Cherokee">
                                                        Cherokee </option>
                                                    <option value="Grand Cherokee">
                                                        Grand Cherokee </option>
                                                    <option value="Wrangler">
                                                        Wrangler </option>
                                                    <option value="Compass">
                                                        Compass </option>
                                                </optgroup>
                                                <optgroup label="Alfa Romeo">
                                                    <option value="Giulia">
                                                        Giulia </option>
                                                    <option value="Stelvio">
                                                        Stelvio </option>
                                                </optgroup>
                                                <optgroup label="Abarth">
                                                    <option value="Abarth 595">
                                                        Abarth 595 </option>
                                                    <option value="Abarth 595 PISTA">
                                                        Abarth 595 PISTA </option>
                                                    <option value="Abarth 595 TURISMO">
                                                        Abarth 595 TURISMO </option>
                                                    <option value="Abarth 595 COMPETIZIONE">
                                                        Abarth 595 COMPETIZIONE </option>
                                                   
                                                </optgroup>
                                                <optgroup label="Fiat Professional">
                                                    <option value="Renegade">
                                                        Renegade </option>
                                                    <option value="Cherokee">
                                                        Cherokee </option>
                                                    <option value="Grand Cherokee">
                                                        Grand Cherokee </option>
                                                    <option value="Wrangler">
                                                        Wrangler </option>
                                                    <option value="Compass">
                                                        Compass </option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
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
            </div>
            <br>
            <br>
            <br>
        </div>


    </div>
</main>
@endsection
