<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta name="theme-color" content="#009999">
    <meta name="keywords" content="{{ config('app.name', 'Laravel') }}">
    <meta name="author" content="Loïc Frémaux">
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('favicon.ico') }}" rel="icon">
</head>

<div id="wrapper">
    <header>
        @include('layout.header')
    </header>

    <section class="content_wrapper">
        @yield('content')
    </section>

    <footer>
        @include('layout.footer')
    </footer>
</div>
</html>
