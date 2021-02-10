@extends('templates/template')

@section('title') Websites op maat voor elk platform @endsection

@section('bodyClass') home @endsection

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="hero-content">
                        <h1><span class="main">n</span>wave, websites op maat voor elk platform</h1>
                        <p>wij bij nwave kunnen al uw online vraagstukken oplossen en verwerken in digitale form zoals
                            websites en webshops voor beide bedrijf en particulier</p>
                        <a class="btn" href="/projecten">Bekijk ons werk</a>
                    </div>
                </div>
                <div class="col-lg-6 image-holder-fix col-lg-rm">
                    <img src="{{asset('/images/homepage/hero-img2.png')}}" alt="">
                </div>
            </div>
            <img class="hero_under" src="{{asset('/images/homepage/hero-under.png')}}" alt="">
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-rm ">
                    <div class="content image">
                        <img src="{{asset('/images/homepage/services_2.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h2>Over nwave, en wat wij doen.</h2>
                        <p>nwave is een bedrijf opgericht door vier eindejaars studenten op met Mediacollege Amsterdam
                            die de opleiding Mediadeveloper volgen. Iedereen binnen het team heeft passie voor
                            programmeren. Het bedrijfsleven voor ieder is niets nieuws, de norm van de opleiding media
                            development is dat iedere student twee keer een half jaar stage loopt binnen een ervaren
                            bedrijf, dus voor ons is het werken met klanten, projecten en documentatie niks nieuws. </p>
                        <a class="btn white" href="/over-ons">Lees meer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="intro-header">
                        <h2>Wat wij doen.</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-6">
                    <img src="{{asset('/images/icons/globe.png')}}" alt="SEO">
                    <h4>Website's</h4>
                </div>
                <div class="col-lg-3 col-6">
                    <img src="{{asset('/images/icons/webshop.png')}}" alt="SEO">
                    <h4>Webshops</h4>
                </div>
                <div class="col-lg-3 col-6">
                    <img src="{{asset('/images/icons/wrench.png')}}" alt="SEO">
                    <h4>Onderhoud</h4>
                </div>
                <div class="col-lg-3 col-6">
                    <img src="{{asset('/images/icons/analysis.png')}}" alt="SEO">
                    <h4>SEO</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="cta" style="background-image: url('{{asset('/images/global/cta.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-auto">
                    <div class="cta-content">
                        <h2>Geïnteresseerd? Bekijk ons werk.</h2>
                        <p>Bekijk ons werk laatste werk om er achter te komen of wij geschikt zijn voor u</p>
                        <a class="btn white" href="/projecten">Projecten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
