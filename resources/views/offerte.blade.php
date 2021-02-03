@extends('templates/template')

@section('title') Offerte aanvragen @endsection

@section('bodyClass') offerte @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/offerte/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Offerte aanvragen, <br> Zo gedaan.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolores doloribus est in ipsam
                            ipsum modi molestias neque quisquam. Aliquam aperiam at facilis harum laudantium nihil obcaecati
                            perferendis sint voluptatem?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-auto">
                    <h2>Onze services.</h2>
                    <p>Bekijk wat uw wensen zijn en wat wij voor u kunnen betekenen</p>
                </div>
            </div>
        </div>
    </section>

@endsection
