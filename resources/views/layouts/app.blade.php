<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Consejos y ejercicios para un cuerpo sano - Julien Leprêtre">
    <title>{{ config('app.name', 'Julien Leprêtre') }}</title>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-N6NVVKQ');</script>
    <!-- End Google Tag Manager -->    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">    
    <link href="{{ asset('css/app.css') }}" href="/css/app.css" rel="stylesheet">
</head>
<body class="bg-white">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6NVVKQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <div id="app" class="italic text-gray-900">

        <navbar-component></navbar-component>

        @include('layouts/message')
        
        <main >
            @yield('content')
        </main>

    </div>     
    @stack('scripts')
</body>
</html>
