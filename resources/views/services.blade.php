@extends('templates/template')

@section('description') "Wat kunnen wij voor u betekenen? bekijk onze services." @endsection

@section('title') Offerte aanvragen @endsection

@section('bodyClass') offerte @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/services/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content" data-aos="fade-up">
                        <h1>onze services</h1>
                        <p>Bekijk wat wij voor u kunnen betekenen op online gebied.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popup">
        <div class="popup-container">
            <div class="content-parent">
                <div class="content">
                    <h4>Corona is voor iedereen lastig...</h4>
                    <p>Iedereen heeft er last van en er kan af en toe spraken zijn dat uw budget beinvloed is door COVID-19. Alsnog kunnen wij u altijd helpen. neem contact met ons op of bel ons en dan regelen wij dat u alsnog geholpen kan worden</p>
                    <a class="btn" href="/contact">Neem contact op</a>
                    <a id="close-popup" class="close-btn">x</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-auto">
                    <div class="section-intro" data-aos="fade-left">
                        <h2>Onze services.</h2>
                        <p>Bekijk wat uw wensen zijn en wat wij voor u kunnen betekenen</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">

                <div class="col-xxl-3 col-md-6 card-parent">
                    <div class="card" data-aos="fade-down">
                        <div class="card-title">
                            <span>
                                <img src="{{asset('/images/icons/analysis.png')}}" alt="SEO">
                                <h3>SEO*</h3>
                            </span>
                            <div class="divider"></div>
                        </div>
                        <div class="card-content">
                            <p>Hoger in de google charts staan?
                                 Dat kunnen wij voor uw regelen, zodat uw doelgroep uw
                                (bestaande) website makkelijker kan vinden.</p>
                            <a class="btn" href="/services/seo">Bekijk</a>
                            <ul>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Hogere ranking bij Search
                                    Engines
                                </li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Meer bereik voor uw doelgroep
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6 card-parent">
                    <div class="card" data-aos="fade-down">
                        <div class="card-title">
                            <span>
                                <img src="{{asset('/images/icons/globe.png')}}" alt="SEO">
                                <h3>Website</h3>
                            </span>
                            <div class="divider"></div>
                        </div>
                        <div class="card-content">
                            <p>Denk hierbij aan een portfolio of
                                informatieve website. Wij maken een
                                website voor u en zorgen dat deze
                                website op elk platform te bekijken is.</p>
                            <a class="btn" href="/services/website">Bekijk</a>
                            <ul>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Website op maat</li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Beschikbaar op elk platform
                                </li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Design naar uw keuze</li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Prioriteit support</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6 card-parent">
                    <div class="card" data-aos="fade-down">
                        <div class="card-title">
                            <span>
                                <img src="{{asset('/images/icons/wrench.png')}}" alt="SEO">
                                <h3>Onderhoud</h3>
                            </span>
                            <div class="divider"></div>
                        </div>
                        <div class="card-content">
                            <p>Wij bieden onderhoud aan al uw websites.
                            Of deze bij ons is gemaakt maakt niet uit.
                            Wij zorgen dat uw wensen
                                op de website terecht komen.</p>
                            <a class="btn" href="/services/onderhoud">Bekijk</a>
                            <ul>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Veranderingen die uw wilt
                                </li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Beschikbaar op elk platform
                                </li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Design naar keuze</li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Prioriteit support**</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6 card-parent">
                    <div class="card" data-aos="fade-down">
                        <div class="card-title">
                            <span>
                                <img src="{{asset('/images/icons/webshop.png')}}" alt="SEO">
                                <h3>Webshop</h3>
                            </span>
                            <div class="divider"></div>
                        </div>
                        <div class="card-content">
                            <p>Webshops zijn de toekomst. Wij zorgen ervoor dat u uw webshop makkelijk kan bedienen en
                                duidelijk te maken. Alles kan aangepast worden naar uw wensen
                                </p>
                            <a class="btn" href="/services/webshop">Bekijk</a>
                            <ul>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Wordpress custom webshop</li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Webshop op maat</li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Beschikbaar op elk platform
                                </li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Design naar uw keuze</li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="check image">Prioriteit support</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="disclaimer-parent" data-aos="fade-up">
                        <p class="disclaimer">* SEO wordt standaard geleverd bij elk project, heeft u een website via een ander
                            bedrijf, neem eerst contact met hen op voor de website code. Anders kunnen wij helaas niks voor
                            uw betekenen</p>
                        <p class="disclaimer">** Alleen voor al bestaande klanten</p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="divider-under"></div>
                </div>

            </div>
        </div>
    </section>

    <section class="offerte-under">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 data-aos="fade-up">Niet gevonden waar u naar zocht?</h2>
                    <p data-aos="fade-up">Neem contact op en bekijk wat wij alsnog voor u kunnen betekeken</p>
                    <a data-aos="fade-up" class="btn" href="/contact">Contact opnemen</a>
                </div>
            </div>
        </div>
    </section>

@endsection

