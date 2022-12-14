<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', env('APP_NAME'))</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

    @yield('inline-styles')
</head>
<body class="bg-white text-black-primary">
<div id="app">
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
