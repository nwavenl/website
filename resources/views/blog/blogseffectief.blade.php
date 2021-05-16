@extends('templates/template')

@section('description') "nwave blogs, leer elke week nieuwe dingen uit de online wereld." @endsection

@section('title') Zijn blogs effectief voor mijn SEO - Blog @endsection

@section('bodyClass') blog-post @endsection

@section('content')

    <style>
        section.subhero {
            background-image: url("{{asset('/images/blog/blogseffectief/subhero.jpg')}}");
        }

        @media (max-width: 1000px) {
            section.subhero {
                background-image: url("{{asset('/images/blog/blogseffectief/subhero-mobile.jpg')}}");
            }
        }
    </style>

    <section class="subhero">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-12">
                    <div class="content" data-aos="fade-up">
                        <h1>Zijn blogs effectief voor mijn SEO?</h1>
                        <p>Waarom zijn blogs zo effectief? lees het hier!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_post">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Het korte antwoord = Ja!</h3>
                    <p>Maar waarom? dat gaan wij vandaag duidelijk uitleggen. Blogs kunnen veel informatie dienen aan
                        iemand die antwoord op een vraag zoekt. Indien je een recept zoekt voor een appeltaart heb je
                        een grote kans om naar een kook website te gaan waar hun in een blogpost een recept hebben voor
                        een heerlijke appeltaart. </p>
                    <p>Dit komt omdat Google voor een zoekopdracht zoekt naar websites die dezelfde keywords hebben als
                        de zoekopdracht. Hiervoor is het wel belangrijk dat je je titels van je blog post zo duidelijk
                        mogelijk maakt.</p>
                    <p>Gebruik een goede koptekst</p>
                    <img src="{{asset('/images/blog/blogseffectief/hero.png')}}" alt="">
                    <p>En een goede website titel</p>
                    <img src="{{asset('/images/blog/blogseffectief/title.png')}}" alt="">
                    <p>Door deze twee elementen ziet Google of jouw website bij het zoekresultaat hoort en krijg je
                        hierdoor meer tractie naar jouw website.</p>
                    <h3>Waarover moet ik bloggen?</h3>
                    <p>Voor sommige gevallen is bloggen niet nodig, maar vaak is het handig om informatie te geven aan
                        jouw doelgroep zodat zij jouw website vinden. Maar houd je blog inhoud wel bij hetgeen wat jij
                        of jouw bedrijf doet, een verkeerde doelgroep naar je website brengen kan leiden tot slechte
                        cijfers.</p>
                    <p>Hiermee wordt bedoeld dat bezoekers vaak dan niet verder gaan kijken op je website, waardoor het
                        in de ogen van Google er uit ziet dat jouw website niet relevant is, en dit kan juist je SEO
                        tegenspreken.</p>
                    <h3>Ik wil beginnen met bloggen!</h3>
                    <p>Indien je zelf wilt beginnen met bloggen, neem de tijd om goede content te schrijven voor jouw
                        blogpost en gebruik video’s, foto’s of andere verschillende type media, Hoe rijker een pagina is
                        met verschillende content, hoe fijner Google dit vindt.</p>
                    <p>Hulp nodig met het opzetten van een blog of nieuwe website nodig? <a href="/contact">Neem contact op!</a></p>
                </div>
            </div>
        </div>
    </section>


@endsection
