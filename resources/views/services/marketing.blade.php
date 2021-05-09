@extends('templates/template')

@section('title') onderhoud @endsection

@section('bodyClass') services-item @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/about/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Op een goede manier adverteren</h1>
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
                        <img src="{{asset('/images/services/marketing.jpg')}}" alt="Onderhoud image">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h2>Adverteren via uw manier, maar niet wetend hoe?</h2>
                        <p>Steeds vaker zien wij advertenties voorbij komen, soms precies hetgeen wat je zoekt, maar ook
                            interessante advertenties die je aanspreken, wij helpen u uw product, website, webshop of
                            bedrijf te laten groeien. Dit kan via meerdere manieren.</p>
                        <p><strong>Social Media</strong> - actief goede content plaatsen op social media zoals Linkedin
                            kan al meer
                            helpen dan u denkt. Wij helpen u met het maken en onderhouden van uw social media
                            platform(en) en maken content.</p>
                        <p><strong>Google ads</strong> - Adverteren via Google kan extreem effectief zijn. Maar vaak is
                            het moeilijk de
                            juiste doelgroep te bereiken via Google ads, wij helpen u met het maken van advertenties
                            binnen uw budget.</p>
                        <p><strong>Andere adverteer opties</strong> - adverteren kan via meerdere platformen, denk hierbij aan Instagram,
                            TikTok, Facebook en Marktplaats. Wij maken nette en duidelijke advertenties binnen uw
                            budget.</p>
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
                                        <h3>Adverteren via de juiste manier!</h3>
                                        <p>vraag een offerte aan en/ of kom in contact!</p>
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
                                        <input type="hidden" name="type" value="maintenance">
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
                                                <input required name="company" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 form-item">
                                                <label for="budget">Budget</label>
                                                <select name="budget" id="">
                                                    <option value="0">Nog onbekend</option>
                                                    <option value="1">€ 1.500 - € 2.000</option>
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
