@extends('templates/template')

@section('title') sitemap @endsection

@section('bodyClass') sitemap @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/about/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Sitemap</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sitemap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="/">Homepage</a>
                    <a href="/over-ons">Over ons</a>
                    <a href="/projecten">Projecten</a>
                    <a href="/services">services</a>
                    <a href="/contact">Contact</a>
                    <a href="/services/seo">Service pagina - SEO</a>
                    <a href="/services/website">Service pagina - Website</a>
                    <a href="/services/onderhoud">Service pagina - Onderhoud</a>
                    <a href="/services/webshop">Service pagina - Webshop</a>
                    <a href="/algemene-voorwaarden">Algemene-voorwaarden</a>
                    <a href="/privacybeleid">privacybeleid</a>
                </div>
            </div>
        </div>
    </section>

@endsection
