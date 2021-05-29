@extends('templates/template')

@section('description') "Wij zijn de personen achter nwave, en wat doen zij. Lees het hier." @endsection

@section('title') Over ons @endsection

@section('bodyClass') about @endsection

@section('content')

    <style>
        section.subhero {
            background-image: url("{{asset('/images/about/subhero.jpg')}}");
        }

        @media (max-width: 1000px) {
            section.subhero {
                background-image: url("{{asset('/images/about/subhero-mobile.jpg')}}");
            }
        }
    </style>

    <section class="subhero">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="content" data-aos="fade-up">
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
                    <div data-aos="fade-up" class="image-holder">
                        <img src="{{asset('/images/about/about-section.jpg')}}" alt="About image">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content" data-aos="fade-up">
                        <h2>Wie zijn wij?</h2>
                        <p>nwave is een bedrijf opgericht door vier eindejaars studenten van het Mediacollege Amsterdam.
                            Iedereen binnen het team heeft een passie voor het ontwikkelen van op maat gemaakte
                            webapplicaties. Designen, User Interfaces en de benodigde documentatie maken is voor ons
                            niks nieuws.
                            Wij nemen alle taken van u uithanden en zorgen dat alles goed geregeld word.</p>

                        <p>Met ieder bijna 3 jaar aan ervaring helpen wij bedrijven en particulieren aan een digitale
                            footprint, zoals een website of webshop. </p>
                        <a class="btn" href="/services">bekijk onze services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team col-xl-rm">
        <div class="container">
            <div class="row">

                <div class="col-3 col-xl-rm">
                    <div class="team-list">
                        <h2>Ons team</h2>
                        <h5>Over wie wilt u wat weten?</h5>
                        <div class="clean-divider"></div>
                        <p>Jonge professionals die altijd klaarstaan voor een nieuwe uitdaging.</p>
                        <ul>
                            <li id="member-jelle" class="memberRow active">
                                <h5>Jelle Stekelenburg</h5>
                                <p>Projectmanager</p>
                            </li>
                            <li id="member-marco" class="memberRow">
                                <h5>Marco Bruijns</h5>
                                <p>Fullstack developer</p>
                            </li>
                            <li id="member-tin" class="memberRow">
                                <h5>Tin Xian Hu</h5>
                                <p>Fullstack developer</p>
                            </li>
                            <li id="member-yeno" class="memberRow">
                                <h5>Yeno Reus</h5>
                                <p>Back-end developer / Cybersecurity</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-9 col-xl-rm member-row member-jelle">
                    <div class="team-member-info">
                        <div class="row" style="height: 100%">
                            <div class="col-4">
                                <img src="{{asset('images/about/team/JelleNew.png')}}" alt="">
                            </div>
                            <div class="col-8 displayinfo align-items-center">
                                <div class="content">
                                    <h3>Over Jelle</h3>
                                    <div class="divider"></div>
                                    <p>Klant tevredenheid is erg belangrijk voor mij, samen maken wij een geweldig
                                        project waar u trots op kan zijn.</p>

                                    <p>Vanaf jongs af aan ben ik bezig op het internet, van het maken van Youtube
                                        video's, het bewerken van foto's in Photoshop en het maken van webapplicaties. Ik maak het
                                        perfecte design voor uw droom website en zorg er voor dat alles op de pixel na
                                        klopt.</p>
                                    <p>Ook zorg ik ervoor dat uw website hoog in de ranking van bijvoorbeeld Google komt te staan zodat u geen potentiële klanten verliest.</p>
                                    <div class="social-media">
                                        <ul>
                                            <li><a href="https://www.linkedin.com/in/jelle-stekelenburg-1887ba178/"><img src="{{asset('images/icons/linkedin.png')}}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-9 col-xl-rm member-row member-marco hidden">
                    <div class="team-member-info">
                        <div class="row" style="height: 100%">
                            <div class="col-4">
                                <img src="{{asset('images/about/team/MarcoNew.png')}}" alt="">
                            </div>
                            <div class="col-8 displayinfo align-items-center">
                                <div class="content">
                                    <h3>Over Marco</h3>
                                    <div class="divider"></div>
                                    <p>Pas als de klant tevreden is, ben ik dat ook.</p>

                                    <p>Ik hou mij vooral bezig met de back-end van een project. Het is mijn taak om alles soepel te laten verlopen.</p>
                                    <div class="social-media">
                                        <ul>
                                            <li><a href="https://www.linkedin.com/in/marco-bruijns/"><img src="{{asset('images/icons/linkedin.png')}}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-9 col-xl-rm member-row member-tin hidden">
                    <div class="team-member-info">
                        <div class="row" style="height: 100%">
                            <div class="col-4">
                                <img src="{{asset('images/about/team/TinNew.png')}}" alt="">
                            </div>
                            <div class="col-8 displayinfo align-items-center">
                                <div class="content">
                                    <h3>Over Tin Xian</h3>
                                    <div class="divider"></div>
                                    <p>Met 3+ jaar ervaring in het bouwen en onderhouden van webapplicaties ga ik samen met het team door tot de opdrachtgever tevreden is.</p>

                                    <p>Ik zal ervoor zorgen dat uw project snel en goed bereikbaar is, zo als het hoort.</p>
                                    <div class="social-media">
                                        <ul>
                                            <li><a href="https://www.linkedin.com/in/tin-xian-hu/"><img src="{{asset('images/icons/linkedin.png')}}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-9 col-xl-rm member-row member-yeno hidden">
                    <div class="team-member-info">
                        <div class="row" style="height: 100%">
                            <div class="col-4">
                                <img src="{{asset('images/about/team/YenoNew.png')}}" alt="">
                            </div>
                            <div class="col-8 displayinfo align-items-center">
                                <div class="content">
                                    <h3>Over Yeno</h3>
                                    <div class="divider"></div>
                                    <p>Hackers en cybercriminelen zitten tegenwoordig binnen no-time in een systeem. Met de juiste maatregelen worden zij buiten de deur gehouden.</p>
                                    <p>Met meer dan 2 jaar ervaring in het hacken & beveiligen van webapplicaties, zal ik mij volledig focussen op de veiligheid van uw project en de privacy van uw klanten.</p>
                                    <div class="social-media">
                                        <ul>
                                            <li><a href="https://www.linkedin.com/in/yeno-r-7b1bb8172/"><img src="{{asset('images/icons/linkedin.png')}}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>



@endsection
