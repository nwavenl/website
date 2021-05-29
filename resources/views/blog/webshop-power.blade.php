@extends('templates/template')

@section('description') "nwave blogs, Waarom zijn webshops zo krachtig?" @endsection

@section('title') Waarom zijn webshops zo krachtig - Blog @endsection

@section('twitter-hero') {{asset('/images/blog/webshoppower/hero-image.jpg')}} @endsection

@section('bodyClass') blog-post @endsection

@section('content')

    <style>
        section.subhero {
            background-image: url("{{asset('/images/blog/webshoppower/subhero.jpg')}}");
        }

        @media (max-width: 1000px) {
            section.subhero {
                background-image: url("{{asset('/images/blog/webshoppower/subhero-mobile.jpg')}}");
            }
        }
    </style>

    <section class="subhero">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-12">
                    <div class="content" data-aos="fade-up">
                        <h1>Waarom zijn webshops zo krachtig?</h1>
                        <p>Waarom zijn webshops zo krachtig? lees het hier!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_post">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Online winkelen wordt steeds makkelijker.</h3>
                    <p>Bijna iedereen heeft wel eens iets online besteld, zowel via bol.com, Amazon, Coolblue of vele
                        andere webwinkels, en steeds vaker zijn meerdere categorieën producten te bestellen via het
                        internet. Dit heeft alles te maken met gemak, mensen hebben steeds minder tijd en energie over
                        om naar een winkel te gaan en gaan daarom liever online shoppen. Webshops maken het ook steeds
                        aantrekkelijker voor hun klanten, lagere prijzen omdat de kosten van een webshop lager zijn dan
                        een fysieke winkel, gerichte producten laten zien aan de hand van je gedrag op het internet en
                        nog veel meer tricks.</p>
                    <p>Amazon heeft bijvoorbeeld miljarden geïnvesteerd in AWS (Amazon Web Services). Een soort API die
                        door hen gebruikt wordt te kijken naar wat hun klanten waarschijnlijk gaan kopen. Een API
                        (Application Programming Interface) kijkt naar het gedrag van klanten en voorspeld wanneer ze
                        een specifiek product zullen kopen. Dit kan zijn door sluwe advertenties, maar ook door
                        voorspellingen.</p>

                    <h3>Een makkelijk voorbeeld van zo'n voorspelling.</h3>
                    <p>Zoals men weet is Amerika een groot land met verschillende temperaturen per staat. Zo weet AWS
                        dat klanten in bijvoorbeeld Florida nauwelijks tot geen ijskrabbers gaan bestellen, maar in
                        Alaska is juist weer wel aangezien het daar een stuk kouder is. Zo kan Amazon precies weten waar
                        verschillende producten juist wel, en waar juist niet goed verkopen. Dit help hen hun
                        warenhuizen vol te hebben met de juiste producten zonder de kans dat er in verschillende regio’s
                        verkeerde tot nauwelijks gekochte producten op de planken blijven liggen, dit scheelt
                        vervoerskosten, ruimte en extra werk. </p>
                    <p>Natuurlijk wordt AWS niet alleen gebruikt voor ijskrabbers en weersvoorspellingen, maar ook voor
                        het voorspellen wat men gaat kopen door middel van hun gedrag op het internet (cookies).</p>
                    <p>Door dit alleen kunnen prijzen van producten op bijvoorbeeld Amazon stukken goedkoper zijn dan
                        die van fysieke winkels, en wordt het daarom steeds aantrekkelijker om online je producten te
                        kopen.</p>

                    <h3>Gevolgen van COVID-19.</h3>
                    <p>Natuurlijk is heel de wereld ook getroffen door Corona, maar tijdens deze tijd zijn webshops
                        zoals Bol, Coolblue etc helemaal niet stil gaan staan, integendeel zelfs, de omzet is alleen
                        maar hoger geworden omdat fysieke winkels helemaal niet open waren. </p>
                    <p>Alleen hierdoor kun je de invloed van het online winkelen al inzien, en het zal ook niet hier
                        stoppen, technieken worden steeds beter, mensen krijgen steeds minder tijd en worden luier met
                        de tijd, hierdoor is het altijd handig je winkel ook online te hebben staan.</p>

                    <h3>Webshop nodig?</h3>
                    <p>Heeft u een webshop nodig? We helpen u graag verder een geweldige webshop op te zetten zodat ook u uw producten online kan verkopen.
                        <a href="/services/webshop">Vraag hier een offerte aan.</a></p>
                </div>
            </div>
        </div>
    </section>


@endsection
