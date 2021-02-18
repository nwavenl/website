@extends('templates/template')

@section('title') SEO @endsection

@section('bodyClass') services-item @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/about/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Service: SEO</h1>
                        <p>Bekijk een korte uitleg van de functies van een SEO, en neem eventueel contact op.</p>
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
                        <h2>Wat is SEO?</h2>
                        <p>SEO staat voor Search Engine Optimalisation (Zoekmachine Optimalisatie). Dit zorgt ervoor dat
                            uw bedrijf of website hoger in de google, bing en andere search engines staan. Misschien
                            klinkt dit niet als iets groots, maar wist u dat meer dan 95% van de google gebruikers niet
                            verder klikken dan de eerste page. Dus misschien verliest u extreem veel bezoekers zonder
                            een goede reden.</p>
                        <p>Wij helpen u hier graag mee, neem contact met ons op en wij gaan aan de slag om te kijken wat
                            wij voor u kunnen betekenen. </p>
                        <a class="btn" href="/contact">neem contact op</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
