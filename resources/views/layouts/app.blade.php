<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Julien Leprêtre, Ostéopathe Français à Buenos Aires en Argentine">
    <title>{{ config('app.name', 'Julien Leprêtre') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="bg-white italic text-gray-900">

        <navbar-component></navbar-component>

        @include('layouts/message')
        
        <main {{-- class="py-4" --}}>
            @yield('content')
        </main>
    </div>
</body>
</html>
