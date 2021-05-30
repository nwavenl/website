@extends('templates/template')

@section('description') "SEO, oftewel zoekmachineoptimalisatie is een belangrijk onderdeel voor een website, het niet hoog staan in Google kan er voor zorgen dat uw website potentiële bezoekers misloopt." @endsection

@section('title') SEO @endsection

@section('bodyClass') services-item @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/about/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Hulp nodig met uw seo?</h1>
                        <p>Bekijk hier wat wij voor u kunnen betekenen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro" style="padding: 120px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-rm">
                    <div class="image-holder">
                        <img src="{{asset('/images/services/seo.jpg')}}" alt="SEO image">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h2>Waarom is SEO belangrijk voor uw website?</h2>
                        <p>Google wordt globaal 92.06% van de tijd gebruikt voor het stellen van een vraag, en het
                            aantal vragen groeit per jaar tussen de 10% - 15%. Het gaat momenteel om 5.8 miljard vragen
                            per dag die Google gesteld krijgt en met deze informatie is te zien hoe belangrijk het is om
                            hoog te staan in de ranking van Google. Als je als bedrijf niet eens in de eerste pagina van
                            het gewenste zoekresultaat staat mist u al 86% van al uw potentiële bezoekers.</p>
                        <p>Wij helpen u graag opweg om uw website/ webshop te verbeteren in de ogen van een zoekmachine
                            zodat u meer klanten of bezoekers kan krijgen op uw website.</p>
                        <p>Interesse? Neem aub contact op of bel ons via: (+31) 6 24421363</p>
                        <a class="btn" href="/contact">neem contact op</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{---- CTA ----}}
    @include('includes.cta')

@endsection
