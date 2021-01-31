<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">

    <title>nwave</title>

</head>
<body>
@include('includes.nav')
<main>
    <section class="hero">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-6">
                    <div class="hero-content">
                        <h1><span class="main">n</span>wave, websites op maat voor elk platform</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consectetur debitis
                            eligendi
                            eos explicabo laboriosam maxime officiis qui repellendus, similique? Ab architecto commodi
                            eligendi iste magnam quas quibusdam, sed voluptatem.</p>
                        <a class="btn" href="#">Bekijk ons werk</a>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{asset('/images/homepage/hero-img.png')}}" alt="">
                </div>
            </div>
            <img class="hero_under" src="{{asset('/images/homepage/hero-under.png')}}" alt="">
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content">

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>
