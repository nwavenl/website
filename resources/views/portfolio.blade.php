@extends('templates/template')

@section('description') "Bekijk hier ons laatste werk om te zien wat wij voor u kunnen betekenen." @endsection

@section('title') Ons portfolio @endsection

@section('bodyClass') portfolio @endsection

@section('content')

    <style>
        section.subhero {
            background-image: url("{{asset('/images/portfolio/subhero.jpg')}}");
        }

        @media (max-width: 1000px) {
            section.subhero {
                background-image: url("{{asset('/images/portfolio/subhero-mobile.jpg')}}");
            }
        }
    </style>

    <section class="subhero">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                        <div class="content" data-aos="fade-up">
                            <h1>Portfolio</h1>
                            <p>Bekijk hier onze laatste projecten om inzicht te krijgen in onze kwaliteiten.</p>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="portfolio-card" style="background-image: url('{{asset('images/portfolio/ian.jpg')}}')">
                        <a href="https://ianremeijsen.nl/" target="_black">
                        <div class="overlay">
                            <h3>Ianremeijsen.nl</h3>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
