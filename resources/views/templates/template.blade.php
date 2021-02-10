<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="icon"
          type="image/png"
          href="{{asset('/images/global/favicon.png')}}">


    <title>nwave - @yield('title')</title>

</head>
    <body class="@yield('bodyClass')">
        @include('includes.nav')

        <main>
            @yield('content')
        </main>

        @include('includes.footer')
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('/js/app.js')}}"></script>
