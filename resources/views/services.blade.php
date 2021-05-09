@extends('templates/template')

@section('description') "Wat kunnen wij voor u betekenen? bekijk onze services." @endsection

@section('title') Services @endsection

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
                    <p>Iedereen heeft er last van en er kan af en toe spraken zijn dat uw budget beïnvloed is door COVID-19. Alsnog kunnen wij u altijd helpen. neem contact op of bel ons en dan regelen wij dat u alsnog geholpen kan worden.</p>
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
                            <p>Hoger in de google charts staan? Dat kunnen wij voor u regelen, zodat uw doelgroep en uw (bestaande) website makkelijker kan vinden.</p>
                            <ul>
                                <li>Hoger in Google</li>
                                <li>Meer bereik in doelgroep</li>
                                <li>Meer tractie naar uw website/ webshop</li>
                            </ul>
                            <a href="/services/seo" class="btn">Lees meer</a>
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
                            <p>Denk hierbij aan een portfolio of informatieve website. Wij maken een website voor u en zorgen dat deze website op elk platform te bekijken is.</p>
                            <ul>
                                <li>Design naar uw smaak</li>
                                <li>Gebruiksvriendelijk</li>
                                <li>Modern en toekomstgericht</li>
                                <li>Snelle onderhoud indien nodig</li>
                                <li>99.9% uptime van uw website</li>
                            </ul>
                            <a href="/services/website" class="btn">Lees meer</a>
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
                            <p>Social media, Google Ads en Google Analytics op de juiste manier gebruiken om te andventeren voor uw bedrijf.</p>
                            <ul>
                                <li>Gemakkelijke advertenties</li>
                                <li>Gericht op uw doelgroep(en)</li>
                                <li>Voor elk budget</li>
                                <li>Op maak gemaakte posts voor elk social media platform</li>
                            </ul>
                            <a href="/services/marketing" class="btn">Lees meer</a>
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
                            <p>Webshops zijn de toekomst. Wij zorgen ervoor dat u uw webshop makkelijk kan bedienen en duidelijk te maken. Alles kan aangepast worden naar uw wensen.</p>
                            <ul>
                                <li>Op maat gemaakte wwebshop</li>
                                <li>Design naar uw smaak</li>
                                <li>Modern en toekomstgericht</li>
                                <li>Snelle onderhoud indien nodig</li>
                                <li>99.9% uptime van uw webshop</li>
                                <li>Gemakkelijk te gebruiken</li>
                            </ul>
                            <a href="/services/webshop" class="btn">Lees meer</a>
                        </div>
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
                    <p data-aos="fade-up">Neem contact op en bekijk wat wij alsnog voor u kunnen betekenen</p>
                    <a data-aos="fade-up" class="btn" href="/contact">Contact opnemen</a>
                </div>
            </div>
        </div>
    </section>

@endsection

