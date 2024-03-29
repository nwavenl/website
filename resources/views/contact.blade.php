@extends('templates/template')

@section('description') "Neem contact met ons op, en wij helpen u zo snel mogelijk verder" @endsection

@section('title')Neem contact met ons op @endsection

@section('twitter-hero') "{{asset('/images/global/OG.jpg')}}" @endsection

@section('bodyClass') contact @endsection

@section('content')

    <style>
        section.subhero {
            background-image: url("{{asset('/images/contact/subhero.jpg')}}");
        }

        @media (max-width: 1000px) {
            section.subhero {
                background-image: url("{{asset('/images/contact/subhero-mobile.jpg')}}");
            }
        }
    </style>

    <section class="subhero">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content" data-aos="fade-up">
                        <h1>Contact</h1>
                        <p>Neem contact met ons op. Wij proberen altijd zo snel mogelijk te reageren</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-12">
                    <!-- <div class="content-parent" data-aos="fade-down">
                        <div class="row">
                            <div class="col-xl-4 col-12">
                                <div class="card-parent">
                                    <div class="card-title">
                                        <h3>Contact informatie</h3>
                                        <p>Vul het formulier in en wij nemen zo snel mogelijk contact met u op.</p>
                                    </div>
                                    <div class="card-content">
                                        <ul>
                                            <li><a href="tel:0624421363"><img src="{{asset('/images/icons/phone.png')}}" alt="telefoon">(+31) 6 24421363</a></li>
                                            <li><a href="mailto: contact@nwave.nl"><img src="{{asset('/images/icons/mail.png')}}" alt="email">contact@nwave.nl</a></li>
                                        </ul>
                                        <a class="social" href="https://www.linkedin.com/company/31411281/"><img src="{{asset('/images/icons/linkedin.png')}}" alt="Linkedin logo"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-12">
                                <div class="form-parent">
                                    <form method="HEAD" action="{{ route('send-mail') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="voornaam">Voornaam*</label>
                                                <input name="voornaam" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="achternaam">Achternaam*</label>
                                                <input name="achternaam" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="email">E-mail*</label>
                                                <input name="email" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="telefoon">Telefoon</label>
                                                <input name="telefoon" type="text">
                                            </div>
                                            <div class="col-12 form-item">
                                                <label for="bericht">Stel uw vraag</label>
                                                <textarea name="bericht" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="row btn-right">
                                            <button name="submit" type="submit" class="btn">Verstuur bericht</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <h3>Sorry voor het ongemak, maar dit formulier staat voorlopig uit.</h3>
                    <p>Mailen kan altijd nog wel, mail ons via: <a class="main" href="mailto:contact@nwave.nl">contact@nwave.nl</a></p>
                </div>
            </div>
        </div>
    </section>

    {{---- CTA ----}}
    @include('includes.cta')

@endsection
