<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')</title>

    <!-- Here we add Roboto Font of Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" id="fontsGoogle">

    <!-- Here we use fontawesome 5.15.1 -->
    <script src="{{ asset('js/allFontAwesome.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    @yield('custom_js_head')
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/btcustom.css') }}">

    <livewire:styles />

    @yield('custom_css')

</head>
<body>

    <livewire:header />


    @yield('content')


    <livewire:footer />

    <livewire:scripts />
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    @yield('custom_js')
</body>
</html>
