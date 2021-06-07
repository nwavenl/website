@extends('templates/template')

@section('description') "nwave blogs, Hoe veilig zijn mijn wachtwoorden precies, lees tips over het maken van een stek en veilig wachtwoord." @endsection

@section('title')Hoe veilig zijn mijn wachtwoorden - Blog @endsection

@section('twitter-hero') "{{asset('/images/blog/wachtwoord/hero-image.jpg')}}" @endsection

@section('bodyClass') blog-post @endsection

@section('content')

    <style>
        section.subhero {
            background-image: url("{{asset('/images/blog/wachtwoord/subhero.jpg')}}");
        }

        @media (max-width: 1000px) {
            section.subhero {
                background-image: url("{{asset('/images/blog/wachtwoord/subhero-mobile.jpg')}}");
            }
        }
    </style>

    <section class="subhero">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-12">
                    <div class="content" data-aos="fade-up">
                        <h1>Zijn jouw wachtwoorden veilig? en wat houdt veilig in?</h1>
                        <p>Een aantal tips over het maken van een goed en sterk wachtwoord, veilig zijn op het internet is
                            belangrijk.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_post">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Hoe veilig zijn mijn wachtwoorden?</h3>
                    <p>86% van alle wachtwoorden die over de wereld gebruikt worden, voldoen niet aan de
                        huidige veiligheidsnormen. Vandaag zal ik wat vertellen over deze veiligheidsnormen en
                        waarom het gebruik van een 'password manager' jouw internet ervaring en stuk
                        aangenamer zal maken.</p>
                    <img src="{{asset('/images/blog/wachtwoord/datalek.jpg')}}" alt="Datalek artikel nu.nl">
                    <p>Het komt heel veel voor dat mensen een wachtwoord 'recyclen' voor meerdere websites. Dit
                        is niet alleen een gevaar voor je privacy, maar ook een uitnodiging voor hackers om een
                        kijkje te nemen waar je ze eigenlijk niet wilt hebben.</p>
                    <p>Veel hackers gebruiken software om zogeheten 'dictionary attacks' uit te voeren op
                        accounts van verschillende platformen. Een dictionary attack is een aanval waarbij hackers
                        mogelijk meerdere miljoenen wachtwoorden testen in combinatie met een gebruikersnaam,
                        in de hoop dat jouw wachtwoord in de lijst staat. Het proces is vrij simpel en je zal versteld
                        staan hoe vaak het lukt om ook daadwerkelijk binnen te komen.</p>

                    <h3>Hoe kan ik mij hier tegen beschermen?</h3>
                    <p>Als eerst, kan je checken of je huidige wachtwoorden voorkomen in een datalek. Dit kan op
                        de site <a href="https://haveibeenpwned.com/Passwords">haveibeenpwned</a>. Mocht je wachtwoord
                        gevonden zijn in
                        een datalek, verander deze dan zo snel mogelijk.</p>
                    <p>Er zijn een paar simpele stappen om jouw internet ervaring aangenamer te maken. Met een
                        password manager zit je eigenlijk in een paar klikken goed. Een password manager is een
                        add-on die al jouw wachtwoorden voor je onthoudt. Password managers kunnen nog veel
                        meer, maar dit is even snel de basis. Je hoeft geen enkel wachtwoord meer te onthouden,
                        een wachtwoorden boekje is dus niet meer nodig. Je kan voor iedere website een ander
                        (veilig) wachtwoord aanmaken, de passwords managers worden gesynchroniseerd met je
                        telefoon, mits je de mobiele versie ook installeert, en de meeste van deze password
                        managers zijn geheel gratis!
                    </p>
                    <p>Een andere stap is zelf een veilig wachtwoord creëren en dit bijhouden in bijvoorbeeld een
                        wachtwoordenboekje. Het is niet de efficiëntste manier, maar voor sommige mensen werkt
                        dit beter. Probeer bij het maken van een veilig wachtwoord om je aan een aantal kleine
                        regeltjes te houden.</p>
                    <ul>
                        <li>Minimaal 10 karakters</li>
                        <li>Minimaal 1 of 2 leestekens</li>
                        <li>Minimaal 1 cijfer</li>
                        <li>Gebruik meerdere hoofdletters</li>
                        <li>Gebruik geen datums, namen van jou of je kinderen of andere snel te vinden informatie over jou</li>
                    </ul>
                    <p>Hier een voorbeeld van een veilig wachtwoord <strong>F2YJFH4zd8vc</strong></p>

                    <h3>Verdere stappen ondernemen.</h3>
                    <p>Een veilig wachtwoord is een stap in de juiste richting, maar er zijn nog veel meer
                        manieren om jezelf beter te beschermen tegen cybercriminelen. Kijk gerust is op het
                        internet voor meer informatie over dit soort onderwerpen</p>
                </div>
            </div>
        </div>
    </section>


@endsection
