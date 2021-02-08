@extends('templates/template')

@section('title') Pagina niet gevonden @endsection

@section('bodyClass') error404 @endsection

@section('content')

    <section class="404">
        <div class="container">
            <div class="row row-404 align-items-center text-center">
                <div class="col-12">
                    <h1>404</h1>
                    <p>Deze pagina bestaat niet...</p>
                    <a href="/">terug naar homepage</a>
                </div>
            </div>
        </div>
    </section>

@endsection
