@extends('templates/template')

@section('description') "Bekijk onze algemene voorwaarden hier." @endsection

@section('title')Download de algemene voorwaarden @endsection

@section('twitter-hero') "{{asset('/images/global/OG.jpg')}}" @endsection

@section('bodyClass') voorwaarden @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/voorwaarden/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Algemene voorwaarden</h1>
                        <p>Al onze juridische regels op één pagina.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="voorwaarden" style="padding: 120px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Download onze algemene voorwaarden</h2>
                    <a download href="{{asset('Algemene-voorwaarden.pdf')}}"><img src="{{asset('/images/voorwaarden/file.png')}}" alt="Download icon">Download PDF</a>
                </div>
            </div>
        </div>
    </section>

@endsection
