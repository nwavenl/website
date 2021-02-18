@extends('templates/template')

@section('description') "nwave, wij maken website's en webshops op maat voor particulieren en bedrijven. Bekijk onze website voor meer informatie" @endsection

@section('title') Websites op maat voor elk platform @endsection

@section('bodyClass') home @endsection

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="hero-content">
                        <h1><span class="main">n</span>wave, websites op maat voor elk platform</h1>
                        <p>Wij van nwave kunnen al uw online vraagstukken oplossen en verwerken in digitale form. Denk hierbij aan
                            websites en webshops voor beide bedrijf en particulier.</p>
                        <a class="btn" href="/projecten">Bekijk ons werk</a>
                    </div>
                </div>
                <div class="col-lg-6 image-holder-fix col-lg-rm">
                    <img src="{{asset('/images/homepage/hero-img2.png')}}" alt="Hero image">
                </div>
            </div>
            <img class="hero_under" src="{{asset('/images/homepage/hero-under.png')}}" alt="Hero under image">
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-rm ">
                    <div class="content image">
                        <img src="{{asset('/images/homepage/services_2.png')}}" alt="Services image">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h2>Over nwave, en wat wij doen.</h2>
                        <p>nwave is een bedrijf opgericht door vier eindejaars studenten van het Mediacollege in Amsterdam.
                            Iedereen binnen het team heeft een passie voor het programmeren van websites.
                            Voor ons is het werken met klanten, projecten en documentatie niks nieuws.</p>
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
                        <h2>Waar wij ons in specialiseren.</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-6">
                    <img src="{{asset('/images/icons/globe.png')}}" alt="SEO">
                    <h4>Websites</h4>
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
                        <p>Bekijk hier onze gemaakte projecten om een indruk te krijgen van ons maatwerk</p>
                        <a class="btn white" href="/projecten">Projecten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
