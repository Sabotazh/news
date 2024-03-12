<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Новини та події') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
    <link rel="stylesheet" href="{{ asset('cdn/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main class="main" id="main">
        {{ $slot }}
    </main>

    <script src="{{ asset('cdn/js/intlTelInput.min.js') }}"></script>
    <script src="{{ asset('cdn/js/maskinput.js?v=043') }}" id="maskinput-script" defer=""></script>
    <script src="{{ asset('cdn/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('cdn/js/custom-select.js') }}"></script>
    <script src="{{ asset('js/components.js') }}"></script>
</body>
</html>
