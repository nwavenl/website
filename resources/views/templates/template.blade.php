<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FLC3YLEV84"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-FLC3YLEV84');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/loader.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="icon"
          type="image/png"
          href="{{asset('/images/global/favicon.png')}}">

{{--seo--}}

<!-- SEO -->
    <meta name="copyright"
          property="copyright"
          content="nwave">

    <meta name="robots" content="index,follow">

    <meta name="url" content="@php echo(Request::url()) @endphp">

    <meta name="language" content="NL">

    <meta name="description"
          property="description"
          content=@yield('description')>
    <meta name="title"
          property="title"
          content="@yield('title') - nwave">
    <meta name="keywords"
          property="keywords"
          content="nwave,new wave, wave, nave, webdesign, website, websites, webshop, webshops, design, seo, onderhoud, schagen, nwave schagen, nwave websites, schagen websites">

    <title>@yield('title') - nwave</title>

    <script>
        function initMap() {
            // The location of Uluru
            const uluru = {"lat":52.79271752266427,"lng":4.805875013491807};
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 13,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
    </script>

</head>
<body class="@yield('bodyClass')">

<div class="loader-wrapper">
    <img src="{{asset('/images/global/logo.png')}}">
    <div class="loader-body">
        <div class="loader"></div>
    </div>
</div>

@include('includes.nav')

<main>
    @yield('content')

    <section class="cookies-popup">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>We gebruiken cookies om je de beste ervaring op onze site te bieden.</p>
                                <p class="hidden">Je kunt meer informatie vinden over welke cookies we gebruiken in ons
                                    <a
                                        href="/privacybeleid">privacybeleid</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right">
                                <div class="pos">
                                    <a class="cookie-btn top" id="cookieAccept">Accepteer<img
                                            src="{{asset('/images/global/done.png')}}"></a>
                                    <a class="cookie-btn bottom" id="cookieDecline">Afwijzen<img class="small"
                                                                                                 src="{{asset('/images/global/close.png')}}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="elfsight-app-c18f512d-2452-49df-af1c-9a5267620a33"></div> {{--  Whatsapp chat box --}}
</main>

@include('includes.footer')
<script src="https://apps.elfsight.com/p/platform.js" defer></script> {{--  Whatsapp chat box script --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC79QmrIRM1P3WF8fY4zMylvgpEL07d6ec&callback=initMap&libraries=&v=weekly"
    async
></script>

<script>
    $(window).on("load", function () {
        $(".loader-wrapper").fadeOut("slow");
    });
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('/js/app.js')}}"></script>
<script>
    AOS.init();
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-189490181-1">
</script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-189490181-1');
</script>
</body>
</html>

