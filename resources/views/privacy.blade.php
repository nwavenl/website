@extends('templates/template')

@section('description') "Privacybeleid van nwave, lees alle kleine lettertjes hier." @endsection

@section('title')Ons privacy beleid @endsection

@section('twitter-hero') "{{asset('/images/global/OG.jpg')}}" @endsection

@section('bodyClass') privacy @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/privacy/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Privacybeleid</h1>
                        <p>Alles over uw privacy op één pagina.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="voorwaarden" style="padding: 120px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Download ons privacy beleid</h2>
                    <a download href="{{asset('Privacy-verklaring.pdf')}}"><img src="{{asset('/images/voorwaarden/file.png')}}" alt="Download icon">Download PDF</a>
                </div>
            </div>
        </div>
    </section>

@endsection
