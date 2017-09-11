<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! SEO::generate() !!}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700&amp;subset=latin-ext" rel="stylesheet">

    @yield('head')
</head>
<body>
    <div id="app">
        <!-- Navbar -->
        @include('layouts.components.navbar')

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @include('layouts.components.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('body')
</body>
</html>
