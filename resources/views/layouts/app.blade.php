<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="投稿型旅行サイト!!PReBLo! 観光地、宿泊施設、飲食店をみんなに共有しよう！">
        <meta name="keywords" content="旅行,宿泊,ホテル,観光,宿,ご飯,レストラン,旅">
        <meta name="google-site-verification" content="google-site-verification=N5XjBu4b5Ku1mI9ahQI_C497GEJLYl1fInfBoUgZ8uM">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>PReBLo</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/preblo.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/PReBLo.css') }}" rel="stylesheet">
        
    </head>
    <body class="BackGroundColor">

        <div id="app">            
            @component('components.header')
            @endcomponent

            <main >
                @yield('content')
            </main>
            @component('components.footer')
            @endcomponent   
        </div>
    </body>
</html>
