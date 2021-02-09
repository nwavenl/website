@extends('templates/template')

@section('title') website's @endsection

@section('bodyClass') services-item @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/about/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Service: webshop</h1>
                        <p>Bekijk een korte uitleg van de functies van een webshop, en vraag eventueel een offerte
                            aan</p>
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
                        <img src="{{asset('/images/services/webshop.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h2>Waarom een webshop?</h2>
                        <p>Een webshop is de toekomst, wij zien het steeds vaker voorbij komen, alles is online te
                            bestellen. En juist nu in deze onzekere tijden is het nooit verkeerd online je producten te
                            gaan verkopen. Wij bij nwave helpen u uw product op de online markt te zetten, wij kunnen
                            eventueel tips geven bij levering voor handigheden in het online gebied. </p>
                        <p>Met wordpress kunt u makkelijk producten toevoegen, prijzen aanpassen, kortingscodes maken,
                            content veranderen, zendingen bekijken en houd u een goed overzicht over alles wat er
                            gebeurd binnen de webshop, wij helpen altijd met de uitleg van de webshop, zodat u alles te
                            weten krijgt. </p>
                        <p>Vraag vandaag nog een offerte aan en begin aan uw online avontuur.</p>
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
                                        <h3>Vraag uw maatwerk webshop nu aan!</h3>
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
                                                src="{{asset('/images/icons/linkedin.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-12">
                                <div class="form-parent">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="voornaam">Voornaam*</label>
                                                <input required name="voornaam" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="achternaam">Achternaam*</label>
                                                <input required name="achternaam" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="email">E-mail*</label>
                                                <input required name="email" type="email">
                                            </div>
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="telefoon">Telefoon</label>
                                                <input name="telefoon" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="company">Bedrijf / Organisatie*</label>
                                                <input required name="company" type="email">
                                            </div>
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="budget">Budget</label>
                                                <select name="budget" id="">
                                                    <option value="">Nog onbekend</option>
                                                    <option value="">€ 5.000 - € 10.000</option>
                                                    <option value="">€ 10.000 - € 15.000</option>
                                                    <option value="">€ 15.000+</option>
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