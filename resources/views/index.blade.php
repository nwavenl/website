@extends('templates/template')

@section('description') "nwave kan al uw online vraagstukken oplossen en verwerken in digitale form. Denk hierbij aan websites, webshops, SEO, onderhoud aan uw huidige site en adverteren via social media en Google. Dit doen wij voor beide bedrijf en particulier" @endsection

@section('title')Websites op maat voor elk platform @endsection

@section('twitter-hero') "{{asset('/images/global/OG.jpg')}}" @endsection

@section('bodyClass') home @endsection

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="hero-content">
                        <h1 data-aos="fade-right">nwave
                        </h1>
                        <h4 data-aos="fade-right">Websites op maat voor elk platform.</h4>
                        <p data-aos="fade-right">nwave kan al uw online vraagstukken oplossen en verwerken in digitale
                            form. Denk hierbij aan websites, webshops, SEO, onderhoud aan uw huidige site en adverteren
                            via social media en Google. Dit doen wij voor beide bedrijf en particulier</p>
                        <a data-aos="fade-up" class="btn" href="/contact">Neem contact op</a>
                    </div>
                </div>
                <div class="col-lg-6 image-holder-fix col-lg-rm">

                    @include('includes.hero-slick')
                    <div class="under-text">
                        <img src="{{asset('/images/icons/arrow.png')}}" alt="Arrow">
                        <p class="under">Waarmee kunnen wij u helpen?</p>
                    </div>

                </div>
            </div>
            <img class="hero_under" src="{{asset('/images/homepage/hero-under.png')}}" alt="Hero under image">
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-rm">
                    <div class="content image">
                        <img src="{{asset('/images/homepage/website-voorbeeld.png')}}" alt="Services image">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h2>Over nwave, en wat wij doen.</h2>
                        <p>nwave is een bedrijf opgericht door vier eindejaars- studenten van het Mediacollege in
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
                    <div class="section-intro" data-aos="fade-left">
                        <h2>Waar wij ons in specialiseren.</h2>
                        <p>Waar kunnen wij u mee helpen?</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">

                <div class="col-xxl-3 col-md-6 card-parent">
                    <div class="card" data-aos="fade-down">
                        <div class="card_title">
                            <h3>SEO</h3>
                            <img src="{{asset('/images/service-images/seo.jpg')}}" alt="website card image">
                        </div>
                        <div class="card_content">
                            <p>Hoger in de google charts staan? Dat kunnen wij voor u regelen, zodat uw doelgroep en uw
                                (bestaande) website makkelijker kan vinden.</p>
                            <ul>
                                <li>Hoger in Google</li>
                                <li>Meer bereik in doelgroep</li>
                                <li>Meer tractie naar uw website/ webshop</li>
                            </ul>
                            <a href="/dienst/seo" class="btn">Lees meer</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6 card-parent">
                    <div class="card" data-aos="fade-down">
                        <div class="card_title">
                            <h3>Website</h3>
                            <img src="{{asset('/images/service-images/website.jpg')}}" alt="website card image">
                        </div>
                        <div class="card_content">
                            <p>Denk hierbij aan een portfolio of informatieve website. Wij maken een website voor u en
                                zorgen dat deze website op elk platform te bekijken is.</p>
                            <ul>
                                <li>Design naar uw smaak</li>
                                <li>Gebruiksvriendelijk</li>
                                <li>Modern en toekomstgericht</li>
                                <li>Snelle onderhoud indien nodig</li>
                                <li>99.9% uptime van uw website</li>
                            </ul>
                            <a href="/dienst/website" class="btn">Lees meer</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6 card-parent">
                    <div class="card" data-aos="fade-down">
                        <div class="card_title">
                            <h3>Marketing</h3>
                            <img src="{{asset('/images/service-images/marketing.jpg')}}" alt="website card image">
                        </div>
                        <div class="card_content">
                            <p>Social media, Google Ads en Google Analytics op de juiste manier gebruiken om te
                                adverteren voor uw bedrijf.</p>
                            <ul>
                                <li>Gemakkelijke advertenties</li>
                                <li>Gericht op uw doelgroep(en)</li>
                                <li>Voor elk budget</li>
                                <li>Op maak gemaakte posts voor elk social media platform</li>
                            </ul>
                            <a href="/dienst/marketing" class="btn">Lees meer</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6 card-parent">
                    <div class="card" data-aos="fade-down">
                        <div class="card_title">
                            <h3>Webshop</h3>
                            <img src="{{asset('/images/service-images/webshop.jpg')}}" alt="website card image">
                        </div>
                        <div class="card_content">
                            <p>Webshops zijn de toekomst. Wij zorgen ervoor dat u uw webshop makkelijk kan bedienen en
                                duidelijk te maken. Alles kan aangepast worden naar uw wensen.</p>
                            <ul>
                                <li>Op maat gemaakte webshop</li>
                                <li>Design naar uw smaak</li>
                                <li>Modern en toekomstgericht</li>
                                <li>Snelle onderhoud indien nodig</li>
                                <li>99.9% uptime van uw webshop</li>
                                <li>Gemakkelijk te gebruiken</li>
                            </ul>
                            <a href="/dienst/webshop" class="btn">Lees meer</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{---- CTA ----}}
    @include('includes.cta')

    <section class="blog-posts">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2>Laatste blog posts</h2>
                </div>

                {{--Hoe veilig zijn mijn wachtwoorden?--}}
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="/blog/hoe-veilig-zijn-mijn-wachtwoorden">
                        <div class="blog_item">
                            <div class="blog_item--header">
                                <img src="{{asset('/images/blog/wachtwoord/hero-image.jpg')}}" alt="Hero image">
                            </div>
                            <div class="blog_item--body">
                                <h3>Hoe veilig zijn mijn wachtwoorden?</h3>
                                <div class="divider"></div>
                                <p>86% van alle wachtwoorden die over de wereld gebruikt worden, voldoen niet aan de
                                    huidige veiligheidsnormen. Vandaag zal ik wat vertellen over deze veiligheidsnormen
                                    en
                                    waarom het gebruik van een 'password manager' jouw internet ervaring en stuk
                                    aangenamer zal maken.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                {{--Zijn blogs effectief voor mijn SEO?--}}
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="/blog/waarom-zijn-webshops-zo-krachting">
                        <div class="blog_item">
                            <div class="blog_item--header">
                                <img src="{{asset('/images/blog/webshoppower/hero-image.jpg')}}" alt="Hero image">
                            </div>
                            <div class="blog_item--body">
                                <h3>Waarom zijn webshops zo krachtig?</h3>
                                <div class="divider"></div>
                                <p>Bijna iedereen heeft wel eens iets online besteld, zowel via bol.com, Amazon,
                                    Coolblue of vele andere webwinkels, en steeds vaker zijn meerdere categorieën
                                    producten te bestellen via het internet. Dit heeft alles te maken met gemak, mensen
                                    hebben steeds minder tijd en energie over om naar een winkel te gaan en gaan daarom
                                    liever online shoppen. Webshops maken het ook steeds aantrekkelijker voor hun
                                    klanten, lagere prijzen omdat de kosten van een webshop lager zijn dan een fysieke
                                    winkel, gerichte producten laten zien aan de hand van je gedrag op het internet en
                                    nog veel meer tricks.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                {{--Zijn blogs effectief voor mijn SEO?--}}
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="/blog/zijn-blogs-effectief-voor-mijn-seo">
                        <div class="blog_item">
                            <div class="blog_item--header">
                                <img src="{{asset('/images/blog/blogseffectief/hero-image.jpg')}}" alt="Hero image">
                            </div>
                            <div class="blog_item--body">
                                <h3>Zijn blogs effectief voor mijn SEO?</h3>
                                <div class="divider"></div>
                                <p>Het korte antwoord is: Ja!
                                    Maar waarom? dat gaan wij vandaag duidelijk uitleggen. Blogs kunnen veel informatie
                                    dienen aan iemand die antwoord op een vraag zoekt. Indien je een recept zoekt voor
                                    een appeltaart heb je een grote kans om naar een kook website te gaan waar hun in
                                    een blogpost een recept hebben voor een heerlijke appeltaart.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


@endsection
