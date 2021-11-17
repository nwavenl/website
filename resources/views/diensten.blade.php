@extends('templates/template')

@section('description') "Wat kunnen wij voor u betekenen? bekijk onze diensten." @endsection

@section('title')Onze diensten @endsection

@section('twitter-hero') "{{asset('/images/global/OG.jpg')}}" @endsection

@section('bodyClass') services scroll @endsection

@section('content')

    <style>
        section.subhero {
            background-image: url("{{asset('/images/services/subhero.jpg')}}");
        }

        @media (max-width: 1000px) {
            section.subhero {
                background-image: url("{{asset('/images/services/subhero-mobile.jpg')}}");
            }
        }
    </style>

    <section class="subhero">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content" data-aos="fade-up">
                        <h1>onze diensten</h1>
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
                    <p>Iedereen heeft er last van en er kan af en toe spraken zijn dat uw budget beïnvloed is door
                        COVID-19. Alsnog kunnen wij u altijd helpen. neem contact op of bel ons en dan regelen wij dat u
                        alsnog geholpen kan worden.</p>
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
                        <h2>Onze diensten.</h2>
                        <p>Op welk gebied kunnen wij u opweg helpen?</p>
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
                            <p>Meer halen uit zoekmachines waaronder Google? Hoger in de Google charts staan? Wij
                                optimaliseren uw website volledig op uw doelgroep.</p>
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
                            <p>Een website is een moderne maar nu ook must-have manier om klanten te trekken en
                                vertrouwen te bouwen met uw doelgroep, wij maken en onderhouden een website naar uw
                                wensen.</p>
                            <ul>
                                <li>Design naar uw smaak</li>
                                <li>Gebruiksvriendelijk</li>
                                <li>Modern en toekomstgericht</li>
                                <li>Snelle onderhoud indien nodig</li>
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
                            <p>Via moderne wegen adventeren en de juiste doelgroep trekken is moeilijker dan het klinkt,
                                wij maken een passende advertentie naar uw wensen.</p>
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
                            <p>Het verkopen van online producten en services is een moeilijke taak, wij helpen u graag
                                aan een snelle & easy-to-use webshop binnen uw wensen.</p>
                            <ul>
                                <li>Op maat gemaakte webshop</li>
                                <li>Design naar uw wensen</li>
                                <li>Modern en toekomstgericht</li>
                                <li>Snelle onderhoud</li>
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

    <section class="offerte-under">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 data-aos="fade-up">Niet gevonden waar u naar zocht?</h2>
                    <p data-aos="fade-up">Neem contact op en bekijk wat wij alsnog voor u kunnen betekenen</p>
                    <a data-aos="fade-up" class="btn" href="/contact">Contact opnemen</a>
                </div>
            </div>
        </div>
    </section>

@endsection

