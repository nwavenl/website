@extends('templates/template')

@section('description') "Bekijk hier ons laatste werk om te zien wat wij voor u kunnen betekenen." @endsection

@section('title') Onze projecten @endsection

@section('bodyClass') projects @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/projecten/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Projecten</h1>
                        <p>Hier zijn al onze cases van klanten die wij geholpen hebben een online footprint te geven!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="disclaimer" style="padding: 40px 0;">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2>Wij hebben helaas nog geen projecten...</h2>
                    <p>bekijk onze services om daar verandering in te brengen.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
