@extends('templates/template')

@section('title') Over ons @endsection

@section('bodyClass') about @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/about/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Over ons</h1>
                        <p>Wie zijn wij? wat doen wij? bekijk het hier.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-rm">
                    <div class="image-holder">
                        <img src="{{asset('/images/about/about-section.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h2>Wie zijn wij?</h2>
                        <p>nwave is een bedrijf opgericht door vier eindejaars studenten op met Mediacollege Amsterdam
                            die de opleiding Mediadeveloper volgen. Iedereen binnen het team heeft passie voor
                            programmeren. Het bedrijfsleven voor ieder is niets nieuws, de norm van de opleiding media
                            development is dat iedere student twee keer een half jaar stage loopt binnen een ervaren
                            bedrijf, dus voor ons is het werken met klanten, projecten en documentatie niks nieuws. </p>
                        <p>Met ieder bijna 3 jaar aan ervaring helpen wij bedrijven en particulieren aan een digitale
                            footprint, zoals een website of webshop. </p>
                        <a class="btn" href="/services">bekijk onze services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row text-center team-row">
                <div class="col-12">
                    <h2>Ons team</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="member">
                        <div class="image-holder">
                            <img src="{{asset('/images/about/team/jelle.jpg')}}" alt="Teamlid: Jelle">
                            <a href="https://www.linkedin.com/in/jelle-stekelenburg-1887ba178/"><img src="{{asset('/images/icons/linkedin.png')}}" alt=""></a>
                        </div>
                        <h5>Jelle Stekelenburg</h5>
                        <p>Front-end developer</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="member">
                        <div class="image-holder">
                            <img src="{{asset('/images/about/team/marco.jpg')}}" alt="Teamlid: Jelle">
                            <a href="https://www.linkedin.com/in/marco-bruijns/"><img src="{{asset('/images/icons/linkedin.png')}}" alt=""></a>
                        </div>
                        <h5>Marco Bruijns</h5>
                        <p>Fullstack developer</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="member">
                        <div class="image-holder">
                            <img src="{{asset('/images/about/team/tinxian.jpg')}}" alt="Teamlid: Jelle">
                            <a href="https://www.linkedin.com/in/tin-xian-hu/"><img src="{{asset('/images/icons/linkedin.png')}}" alt=""></a>
                        </div>
                        <h5>Tin Xian Hu</h5>
                        <p>Fullstack developer</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-12">
                    <div class="member">
                        <div class="image-holder">
                            <img src="{{asset('/images/about/team/yeno.jpg')}}" alt="Teamlid: Jelle">
                            <a href="https://www.linkedin.com/in/yeno-reus-7b1bb8172/"><img src="{{asset('/images/icons/linkedin.png')}}" alt=""></a>
                        </div>
                        <h5>Yeno Reus</h5>
                        <p>Back-end developer</p>
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection