<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') &mdash; {{ env('APP_NAME') }}</title>

        <link rel="stylesheet" href="{{ asset('vendors/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        @stack('style')
    </head>

    <body>
        <header class="foi-header {{ request()->is('/') ? 'landing-header' : '' }}">
            @include('guest.partials.header')
        </header>
        
        @yield('content')
        
        @include('guest.partials.footer')

        <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendors/popper.js/popper.min.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        @stack('script')
    </body>
</html>
