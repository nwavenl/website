@extends('templates/template')

@section('description') "nwave blogs, Wat is het verschil tussen Shorttail en Longtail zoekopdrachten?" @endsection

@section('title') Shorttail vs Longtail - Blog @endsection

@section('bodyClass') blog-post @endsection

@section('content')

    <style>
        section.subhero {
            background-image: url("{{asset('/images/blog/tail/subhero.jpg')}}");
        }

        @media (max-width: 1000px) {
            section.subhero {
                background-image: url("{{asset('/images/blog/tail/subhero-mobile.jpg')}}");
            }
        }
    </style>

    <section class="subhero">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-12">
                    <div class="content" data-aos="fade-up">
                        <h1>Shorttail vs Longtail</h1>
                        <p>Neem een diepere duik in een klant gerichte zoekmachineoptimalisatie</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_post">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <h3>Wat is Shorttail en wat is Longtail?</h3>
                    <p>Om beide een betekenissen te geven hebben wij hiervoor een voorbeeld. Het gaat bij beide Short-
                        en Longtail om de zoekopdracht die jouw doelgroep vraagt tegen bijvoorbeeld Google.</p>
                    <p>Shorttail: “Bedrijfsplan”</p>
                    <img src="{{asset('/images/blog/tail/search1.png')}}" alt="">
                    <p>Longtail: “Hoe maak je een bedrijfsplan”</p>
                    <img src="{{asset('/images/blog/tail/search2.png')}}" alt="">
                    <p>Deze twee zoekopdrachten zijn voor Google erg verschillend en voor de gebruiker ook. Helaas wordt
                        er toch nog te vaak gedacht dat Shorttail de beste opties is, terwijl dit uit de cijfers van
                        Google helemaal niet waar is.</p>

                    <h3>Shorttail</h3>
                    <p>30% van alle zoekopdrachten zijn maar Shorttail, klinkt alsnog redelijk, maar hoog komen in de
                        resultaten is een stuk moeilijker, mede omdat Google je hoger rankt bij een goede CTR, Het
                        aantal keer dat een gebruiker daadwerkelijk op jouw zoekresultaat klikt. Het is dus een stuk
                        moeilijker hoger te komen.</p>
                    <p>Ook is het voor Google niet duidelijk wat je precies bedoelt met de zoekopdracht
                        “bedrijfsplan.</p>

                    <h3>Longtail</h3>
                    <p>70% van alle Google zoekopdrachten zijn dus Longtail. Het goede hiervan is dat je je website hier
                        gemakkelijker op kan laten focussen aan de hand van een goede SEO.</p>

                    <h3>Hulp nodig met uw SEO?</h3>
                    <p>Wij helpen u graag verder om uw website beter te laten presenteren in Google en andere
                        zoekmachines, lees meer over SEO en kom in contact via onze <a href="/services/seo">SEO service</a></p>
                </div>
            </div>
        </div>
    </section>


@endsection
