@extends('templates/template')

@section('description') "nwave blogs, leer elke week nieuwe dingen uit de online wereld." @endsection

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
                    <h3>Waarom zijn de services geupdate?</h3>
                    <p>Bij ons wat te zien dat het deel “Onderhoud” niet aangevraagd werd, dit komt mede omdat mensen
                        het liefst gelijk en geheel nieuwe website willen, wat vaak ook een makkelijkere optie is.</p>
                    <p>Voor ons was het daarom niet logisch meer om het deel onderhoud binnen onze services te houden,
                        gelukkig hadden wij ook het idee om een nieuwe service toe te voegen. Vanaf deze week helpen wij
                        bedrijven en particulieren aan hun marketing.</p>
                    <h3>Marketing? Wat houd dat in?</h3>
                    <p>Marketing staat voor het adverteren van producten, diensten, website of bedrijf zelf aan
                        (toekomstige) klanten. Het ideale van het internet is dat het extreem veel gebruikers heeft en
                        er veel platformen zijn waar adverteren grote voordelen heeft, denk hierbij aan Linkedin voor uw
                        bedrijf/ website. Youtube, TikTok, Instagram en Facebook voor uw producten of diensten.</p>
                    <p>Wij creëren nette en professionele advertenties voor klanten die bij hun huisstijl horen, het
                        onderhouden van advertenties en het maken van aanpassingen indien nodig.</p>
                    <p>En dit alles voor elk budget.</p>
                    <h3>Ik heb marketing nodig!</h3>
                    <p>Heeft u zelf marketing nodig maar niet wetend hoe? Kom in contact of vraag een offerte aan via de
                        nieuwe
                        <a href="/services/marketing">marketing service</a></p>
                </div>
            </div>
        </div>
    </section>


@endsection
