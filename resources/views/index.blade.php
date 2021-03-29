@extends('templates/template')

@section('description') "nwave kan al uw online vraagstukken oplossen en verwerken in digitale form. Denk hierbij aan websites, webshops, SEO en onderhoud aan uw huidige site. Dit doen wij voor beide bedrijf en particulier" @endsection

@section('title') Websites op maat voor elk platform @endsection

@section('bodyClass') home @endsection

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="hero-content">
                        <h1 data-aos="fade-right"><span class="main">n</span>wave, websites op maat voor elk platform
                        </h1>
                        <p data-aos="fade-right">nwave kan al uw online vraagstukken oplossen en verwerken in digitale
                            form. Denk hierbij aan websites, webshops, SEO en onderhoud aan uw huidige site. Dit doen
                            wij voor beide bedrijf en particulier</p>
                        <a data-aos="fade-up" class="btn" href="/contact">Neem contact op</a>
                    </div>
                </div>
                <div class="col-lg-6 image-holder-fix col-lg-rm">
                    <img data-aos="fade-left" src="{{asset('/images/homepage/hero-image.png')}}"
                         alt="Nieuwe website nodig? Wij regelen het voor u">
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
                        <img src="{{asset('/images/homepage/website-voorbeeld.png')}}" alt="Services image">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h2>Over nwave, en wat wij doen.</h2>
                        <p>nwave is een bedrijf opgericht door vier eindejaars studenten van het Mediacollege in
                            Amsterdam.
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
            <div class="row">
                <div class="col-auto">
                    <div class="intro-header">
                        <h2 data-aos="fade-down">Waar wij ons in specialiseren.</h2>
                        <p data-aos="fade-down">Waar kunnen wij u mee helpen?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-lg-6 col-12">
                    <div class="card" data-aos="fade-up">
                        <div class="card-image">
                            <img src="{{asset('/images/homepage/services/seo.jpg')}}" alt="website card image">
                        </div>
                        <div class="card-body">
                            <div class="middle">
                                <div class="placement">
                                    <h4>SEO</h4>
                                    <div class="divider"></div>
                                    <p>Krijg een hogere ranking bij bijvoorbeeld
                                        Google en Bing, Zodat uw doelgroep uw
                                        (bestaande) Website makkelijker vinden.</p>
                                </div>
                            </div>
                            <div class="bottom">
                                <a class="btn" href="/services/seo">Lees meer</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-lg-6 col-12">
                    <div class="card" data-aos="fade-up">
                        <div class="card-image">
                            <img src="{{asset('/images/homepage/services/website.jpg')}}" alt="website card image">
                        </div>
                        <div class="card-body">
                            <div class="middle">
                                <div class="placement">
                                    <h4>Websites</h4>
                                    <div class="divider"></div>
                                    <p>Denk hierbij aan een Portfolio, of
                                        informatieve website. Wij maken een
                                        website voor u en zorgen dat deze
                                        website op elk platform te bekijken is.</p>
                                </div>
                            </div>
                            <div class="bottom">
                                <a class="btn" href="/services/website">Lees meer</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-lg-6 col-12">
                    <div class="card" data-aos="fade-up">
                        <div class="card-image">
                            <img src="{{asset('/images/homepage/services/construction.jpg')}}" alt="website card image">
                        </div>
                        <div class="card-body">
                            <div class="middle">
                                <div class="placement">
                                    <h4>Onderhoud</h4>
                                    <div class="divider"></div>
                                    <p>Onderhoud aan uw al bestaande website
                                        of website gemaakt door ons, het kan
                                        allemaal. Wij zorgen dat uw wensen
                                        op de website terecht komen.</p>
                                </div>
                            </div>
                            <div class="bottom">
                                <a class="btn" href="/services/onderhoud">Lees meer</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-lg-6 col-12">
                    <div class="card" data-aos="fade-up">
                        <div class="card-image">
                            <img src="{{asset('/images/homepage/services/webshop.jpg')}}" alt="website card image">
                        </div>
                        <div class="card-body">
                            <div class="middle">
                                <div class="placement">
                                    <h4>webshops</h4>
                                    <div class="divider"></div>
                                    <p>Webshops zijn de toekomst, wij helpen
                                        u webshop makkelijk te bedienen en
                                        duidelijk te maken. Alles is te veranderen
                                        binnen de wordpress.</p>
                                </div>
                            </div>
                            <div class="bottom">
                                <a class="btn" href="/services/webshop">Lees meer</a>
                            </div>
                        </div>
                    </div>
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
                        <h2 data-aos="fade-up">Geïnteresseerd? Bekijk ons werk.</h2>
                        <p data-aos="fade-up">Bekijk hier onze gemaakte projecten om een indruk te krijgen van ons
                            maatwerk</p>
                        <a data-aos="fade-up" class="btn white" href="/projecten">Projecten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
