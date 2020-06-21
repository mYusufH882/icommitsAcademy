<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Icommits') }}</title>

    <!-- Favicon -->
    <link href="{{ asset('assets/images/logo/logo-iadacemy.png') }}" rel="icon" type="image/png">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/night-mode.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/framework.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"> 

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/icons.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style>

        .hero-slider {
            background-image: url(assets/images/demos/home-labtop.png);
            background-position: bottom;
            padding-top: 0;
            background-size: contain;
            background-repeat: no-repeat;
            height: 60vh;
            margin-top: 4%;
        }


        .hero {
            display: inline-block;
            width: 100%;
            position: relative;
            background: white;
        }

        .diagonal-hero-bg {
            top: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to right, #2b5876, #2f2a44);
            background: -webkit-linear-gradient(to right, #2b5876, #2f2a44);
            z-index: -1;
        }

        .diagonal-hero-innr {
            padding-left: 10%;
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url(assets/images/demos/bg-pricing-page.jpg);

        }

        .rata{
            text-align: justify;
            font-weight: 600px;
            color: #000000;

        }

        .klick{
            text-align: center;
            font-size: 15px;
            color: rgb(0, 128, 255);
        }
    </style>
</head>
<body>
    <div id="app">

        @include('layouts.navbar')

        <main class="py-4">
            @yield('content')
        </main>

    </div>

    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);


        (function (window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('night-mode');
                if (document.documentElement.classList.contains('night-mode')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);
    </script>

    <!-- javaScripts
    ================================================== -->
    <script src="{{ asset('assets/js/framework.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
</body>
</html>
