@extends('templates/template')

@section('title') Websites op maat voor elk platform @endsection

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1><span class="main">n</span>wave, websites op maat voor elk platform</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consectetur debitis
                            eligendi
                            eos explicabo laboriosam maxime officiis qui repellendus, similique? Ab architecto commodi
                            eligendi iste magnam quas quibusdam, sed voluptatem.</p>
                        <a class="btn" href="#">Bekijk ons werk</a>
                    </div>
                </div>
                <div class="col-lg-6 image-holder-fix">
                    <img src="{{asset('/images/homepage/hero-img.png')}}" alt="">
                </div>
            </div>
            <img class="hero_under" src="{{asset('/images/homepage/hero-under.png')}}" alt="">
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content image">
                        <img src="{{asset('/images/homepage/services_2.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <h2>Over nwave, en wat wij doen.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur commodi delectus error
                            fugiat laudantium nobis officia repellendus rerum veniam. Consequuntur ipsam nulla quod.
                            Aliquid amet deserunt doloremque iste, molestiae officia. Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. A, aliquam architecto cumque debitis, dicta dolores ducimus ea
                            exercitationem facilis hic id maxime minima natus neque nulla ratione sint totam
                            veritatis.</p>
                        <a class="btn white" href="#">Bekijk ons werk</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="intro-header">
                        <h2>Wat wij doen.</h2>
                    </div>
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
                        <h2>Geintereseerd? Bekijk ons werk.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Accusantium alias animi aspernatur corporis. lorem ipsum</p>
                        <a class="btn white" href="#">Projecten</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
