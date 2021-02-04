@extends('templates/template')

@section('title') Offerte aanvragen @endsection

@section('bodyClass') offerte @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/offerte/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Offerte aanvragen, <br> Zo gedaan.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolores doloribus est in
                            ipsam
                            ipsum modi molestias neque quisquam. Aliquam aperiam at facilis harum laudantium nihil
                            obcaecati
                            perferendis sint voluptatem?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-auto">
                    <div class="section-intro">
                        <h2>Onze services.</h2>
                        <p>Bekijk wat uw wensen zijn en wat wij voor u kunnen betekenen</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">

                <div class="col-xxl-3 col-md-6 card-parent">
                    <div class="card">
                        <div class="card-title">
                            <span>
                                <img src="{{asset('/images/icons/analysis.png')}}" alt="SEO">
                                <h3>SEO*</h3>
                            </span>
                            <div class="divider"></div>
                        </div>
                        <div class="card-content">
                            <p>Krijg een hogere ranking bij bijvoorbeeld
                                Google en Bing, Zodat uw doelgroep uw
                                (bestaande) Website makkelijker vinden.</p>
                            <a class="btn" href="">Bekijk</a>
                            <ul>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Hogere ranking bij Search
                                    Engines
                                </li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Meer bereik voor uw doelgroep
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6 card-parent">
                    <div class="card">
                        <div class="card-title">
                            <span>
                                <img src="{{asset('/images/icons/globe.png')}}" alt="SEO">
                                <h3>Website</h3>
                            </span>
                            <div class="divider"></div>
                        </div>
                        <div class="card-content">
                            <p>Denk hierbij aan een Portfolio, of
                                informatieve website. Wij maken een
                                website voor u en zorgen dat deze
                                website op elk platform te bekijken is.</p>
                            <a class="btn" href="">Bekijk</a>
                            <ul>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Website op maat</li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Beschikbaar op elk platform
                                </li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Design naar uw keuze</li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Prioriteit support</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6 card-parent">
                    <div class="card">
                        <div class="card-title">
                            <span>
                                <img src="{{asset('/images/icons/wrench.png')}}" alt="SEO">
                                <h3>Onderhoud</h3>
                            </span>
                            <div class="divider"></div>
                        </div>
                        <div class="card-content">
                            <p>Onderhoud aan uw al bestaande website
                                of website gemaakt door ons, het kan
                                allemaal. Wij zorgen dat uw wensen
                                op de website terecht komen.</p>
                            <a class="btn" href="">Bekijk</a>
                            <ul>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Veranderingen die uw wilt
                                </li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Beschikbaar op elk platform
                                </li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Design naar keuze</li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Prioriteit support**</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6 card-parent">
                    <div class="card">
                        <div class="card-title">
                            <span>
                                <img src="{{asset('/images/icons/webshop.png')}}" alt="SEO">
                                <h3>Webshop</h3>
                            </span>
                            <div class="divider"></div>
                        </div>
                        <div class="card-content">
                            <p>Webshops zijn de toekomst, wij helpen
                                u webshop makkelijk te bedienen en
                                duidelijk te maken. Alles is te veranderen
                                binnen de wordpress.</p>
                            <a class="btn" href="">Bekijk</a>
                            <ul>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Wordpress custom webshop</li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Webshop op maat</li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Beschikbaar op elk platform
                                </li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Design naar uw keuze</li>
                                <li><img src="{{asset('/images/icons/check.png')}}" alt="">Prioriteit support</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="disclaimer-parent">
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
                    <h2>Niet gevonden waar u naar zocht?</h2>
                    <p>Neem contact op en bekijk wat wij alsnog voor u kunnen betekeken</p>
                    <a class="btn" href="#">Contact opnemen</a>
                </div>
            </div>
        </div>
    </section>

@endsection
