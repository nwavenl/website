@extends('templates/template')

@section('title') Websites op maat voor elk platform @endsection

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-6">
                    <div class="hero-content">
                        <h1><span class="main">n</span>wave, websites op maat voor elk platform</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consectetur debitis
                            eligendi
                            eos explicabo laboriosam maxime officiis qui repellendus, similique? Ab architecto commodi
                            eligendi iste magnam quas quibusdam, sed voluptatem.</p>
                        <a class="btn" href="#">Bekijk ons werk</a>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{asset('/images/homepage/hero-img.png')}}" alt="">
                </div>
            </div>
            <img class="hero_under" src="{{asset('/images/homepage/hero-under.png')}}" alt="">
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <img src="{{asset('/images/homepage/services_2.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content">

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
