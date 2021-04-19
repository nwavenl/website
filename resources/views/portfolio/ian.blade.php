@extends('templates/template')

@section('description') "Ian remeijsen is een acteur op het Mediacollege Amsterdam." @endsection

@section('title') Ian Remeijsen - Project @endsection

@section('bodyClass') portfolio @endsection

@section('content')

    <style>
        section.subhero {
            background-image: url("{{asset('/images/portfolio/ian/subhero.jpg')}}");
        }

        @media (max-width: 1000px) {
            section.subhero {
                background-image: url("{{asset('/images/portfolio/ian/subhero-mobile.jpg')}}");
            }
        }
    </style>

    <section class="subhero">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content" data-aos="fade-up">
                        <h1>Ianremeijsen.nl</h1>
                        <p>Ian remeijsen is een acteur op het Mediacollege Amsterdam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-intro">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Deze website draait om een acteur op het Mediacollege Amsterdam, Zijn aanvraag was om een
                        portfolio te maken die duidelijkheid geeft over wat Ian doet, aan de hand van een aantal
                        gesprekken, designs en wijzigingen zijn we op het eindresultaat gekomen.</p>
                    <p></p>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('/images/portfolio/ian/ian-1.jpg')}}" alt="">
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('/images/portfolio/ian/ian-2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-link">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Website: <a href="https://ianremeijsen.nl/">Ianremeijsen.nl</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta" style="background-image: url('{{asset('/images/global/cta.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-auto">
                    <div class="cta-content">
                        <h2 data-aos="fade-up">Geïnteresseerd? Neem contact op</h2>
                        <p data-aos="fade-up">Wij staan altijd open voor nieuwe uitdagingen</p>
                        <a data-aos="fade-up" class="btn white" href="/contact">contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
