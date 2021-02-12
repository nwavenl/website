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

        {{--seo--}}

<!-- SEO -->
    <meta name="copyright"
          property="copyright"
          content="MIT License
            Copyright (c) 2021 nwave
            Permission is hereby granted, free of charge, to any person obtaining a copy
            of this software and associated documentation files (the 'Software'), to deal
                in the Software without restriction, including without limitation the rights
                to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                copies of the Software, and to permit persons to whom the Software is
                furnished to do so, subject to the following conditions:
                The above copyright notice and this permission notice shall be included in all
                copies or substantial portions of the Software.
                THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
                SOFTWARE." />

    <meta name="description"
          property="description"
          content="nwave, wij maken website's en webshops op maat voor particulieren en bedrijven" />
    <meta name="title"
          property="title"
          content="nwave - Websites op maat voor elk platform" />
    <meta name="keywords"
          property="keywords"
          content="nwave, webdesign, website, websites, webshop, webshops, design, seo, onderhoud" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FLC3YLEV84"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-FLC3YLEV84');
    </script>


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
