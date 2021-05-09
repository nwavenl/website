@extends('templates/template')

@section('title') webshop @endsection

@section('bodyClass') services-item @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/about/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Online uw producten verkopen?</h1>
                        <p>Bekijk hier wat wij voor u kunnen betekenen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-rm">
                    <div class="image-holder">
                        <img src="{{asset('/images/services/webshop.jpg')}}" alt="Webshop image">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h2>Het belang van een webshop.</h2>
                        <p>Steeds vaker bestellen mensen het liefst hun producten via het internet dan dat ze fysiek
                            naar een winkel gaan. Het is het gemak wat van belang is voor klanten, een goed voorbeeld is
                            de Corona crisis. Veel winkels kunnen niet veel open zijn, en zodra de winkels open zijn
                            willen toch niet alle mensen naar een winkel terwijl het gemakkelijk online kan.</p>
                        <p>Wij helpen u aan een gebruiksvriendelijke webshop die gemakkelijk te gebruiken is voor zowel
                            klant als u, het aanmaken van producten, kortingscodes, betalingsmethodes en nog veel meer,
                            zijn dingen die wij voor u gemakkelijk maken zodat u zich geheel van focussen op de
                            distributie.</p>
                        <p class="lightgrey">bent u slachtoffer van de corona crisis en wilt u alsnog deze stap graag zetten, dan kunnen wij u altijd helpen, neem a.u.b. contact op.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-12">
                    <div class="content-parent">
                        <div class="row">
                            <div class="col-xl-4 col-12">
                                <div class="card-parent">
                                    <div class="card-title">
                                        <h3>Begin vandaag nog aan uw online winkel!</h3>
                                        <p>Vul het formulier in en wij nemen zo snel mogelijk contact met u op.</p>
                                    </div>
                                    <div class="card-content">
                                        <ul>
                                            <li><a href="tel:0624421363"><img src="{{asset('/images/icons/phone.png')}}"
                                                                              alt="telefoon">(+31) 6 24421363</a></li>
                                            <li><a href="mailto: contact@nwave.nl"><img
                                                        src="{{asset('/images/icons/mail.png')}}" alt="email">contact@nwave.nl</a>
                                            </li>
                                        </ul>
                                        <a class="social" href="https://www.linkedin.com/company/31411281/"><img
                                                src="{{asset('/images/icons/linkedin.png')}}" alt="Linkedin logo"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-12">
                                <div class="form-parent">
                                    <form action="{{ route('send-offerte') }}" method="HEAD">
                                        @csrf
                                        <input type="hidden" name="type" value="webshop">
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
                                                <input name="email" type="email">
                                            </div>
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="telefoon">Telefoon</label>
                                                <input name="telefoon" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="company">Bedrijf / Organisatie*</label>
                                                <input name="company" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="budget">Budget</label>
                                                <select name="budget" id="">
                                                    <option value="0">Nog onbekend</option>
                                                    <option value="2">€ 2.000 - € 3.500</option>
                                                    <option value="3">€ 3.500 - € 5.000</option>
                                                    <option value="4">€ 5.000+</option>
                                                </select>
                                            </div>
                                            <div class="col-12 form-item">
                                                <label for="bericht">Stel uw vraag</label>
                                                <textarea name="bericht" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="row btn-right">
                                            <button class="btn">Verstuur bericht</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
