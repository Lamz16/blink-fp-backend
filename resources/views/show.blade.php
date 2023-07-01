<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $user->username }} &mdash; {{ env('APP_NAME') }}</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="container">
        <h1>Daftar Link dari {{ $user->username }}</h1>
    </header>
    <section class="container">
        @foreach ($short_links as $link)
            <a href="{{ $link->real_url }}" class="w-100 d-block text-center py-3 px-auto">{{ $link->title }}</a>
        @endforeach
    </section>
</body>
</html>