@extends('templates/template')

@section('title') Privacybeleid @endsection

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
                    <h2>Er wordt nog aan deze pagina gewerkt...</h2>
                    <p>Het privacybeleid wordt momenteel gemaakt!</p>
                </div>
            </div>
        </div>
    </section>

@endsection
