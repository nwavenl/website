@extends('templates/template')

@section('title') website @endsection

@section('bodyClass') services-item @endsection

@section('content')

    <section class="subhero" style="background-image: url('{{asset('/images/about/subhero.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content">
                        <h1>Website nodig?</h1>
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
                        <img src="{{asset('/images/services/website.jpg')}}" alt="Website image">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h2>Waarom zou u een website nodig hebben?</h2>
                        <p>Websites worden steeds vaker gebruikt en per dag belangrijker in de moderne wereld. Veel
                            mensen zoeken namelijk naar de volgende punten voor uw bedrijf of uzelf.</p>

                        <ul>
                            <li>Het opzoeken van openingstijden</li>
                            <li>Kijken of een dedrijf daadwerkelijk bestaat</li>
                            <li>Reserveringenen maken</li>
                            <li>Vragen stellen</li>
                            <li>Contact opnemen/ zoeken</li>
                            <li>Blogs bekijken</li>
                            <li>Tips opzoeken</li>
                            <li>Mensen leren kennen (portfolio)</li>
                        </ul>

                        <p>Zie een website als een visitekaartje van uw bedrijf of u zelf. Als uw website niet meer
                            modern is, niet klopt, niet goed werkt of andere problemen heeft kan het er vaak voor zorgen
                            dat uw potentiële klanten of bezoekers mist.</p>

                        <p>Wij helpen u opweg met een nette en moderne website waar wij u zo goed mogelijk begeleiden en
                            uw wensen waarnemen.</p>
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
                                        <h3>Vraag uw maatwerk website nu aan!</h3>
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
                                    <form action="{{ route('send-offerte') }}" method="HEAD">
                                        @csrf
                                        <input type="hidden" name="type" value="website">
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
                                                    <option value="1">€ 1.000 - € 2.000</option>
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
