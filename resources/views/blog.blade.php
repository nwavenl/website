@extends('templates/template')

@section('description') "nwave blogs, leer elke week nieuwe dingen uit de online wereld." @endsection

@section('title') Onze laatse blog artikelen @endsection

@section('bodyClass') blog @endsection

@section('content')

    <style>
        section.subhero {
            background-image: url("{{asset('/images/blog/subhero.jpg')}}");
        }

        @media (max-width: 1000px) {
            section.subhero {
                background-image: url("{{asset('/images/blog/subhero-mobile.jpg')}}");
            }
        }
    </style>

    <section class="subhero">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content" data-aos="fade-up">
                        <h1>Laatste blogs</h1>
                        <p>Nieuwe dingen te weten komen op online gebied? lees onze wekelijkse blogs!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-posts">
        <div class="container">
            <div class="row">

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
                                    huidige veiligheidsnormen. Vandaag zal ik wat vertellen over deze veiligheidsnormen en
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

                {{--onze nieuwe services--}}
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="/blog/onze-nieuwe-services">
                        <div class="blog_item">
                            <div class="blog_item--header">
                                <img src="{{asset('/images/blog/services/hero-image.jpg')}}" alt="Hero image">
                            </div>
                            <div class="blog_item--body">
                                <h3>Onze services zijn veranderd!</h3>
                                <div class="divider"></div>
                                <p>Bij ons was te zien dat het deel “Onderhoud” niet aangevraagd werd, dit komt mede
                                    omdat mensen het liefst gelijk en geheel nieuwe website willen, wat vaak ook een
                                    makkelijkere optie is.</p>
                            </div>
                        </div>
                    </a>
                </div>

                {{--shorttail vs longtail--}}
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="/blog/shorttail-vs-longtail">
                        <div class="blog_item">
                            <div class="blog_item--header">
                                <img src="{{asset('/images/blog/tail/hero-image.jpg')}}" alt="Hero image">
                            </div>
                            <div class="blog_item--body">
                                <h3>Shorttail vs Longtail zoekopdrachten</h3>
                                <div class="divider"></div>
                                <p>Bij ons wat te zien dat het deel “Onderhoud” niet aangevraagd werd, dit komt mede
                                    omdat mensen het liefst gelijk en geheel nieuwe website willen, wat vaak ook een
                                    makkelijkere optie is.</p>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </section>

    {{---- CTA ----}}
    @include('includes.cta')

@endsection
