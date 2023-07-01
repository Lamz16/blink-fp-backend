<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $username . '&mdash;' . env('APP_NAME') }}</title>
</head>
<body>
    <header>
        <h1>{{$username}}</h1>
    </header>
    <main>
        @foreach ($short_link as $link)
            <div class="d-block w-100">
                <a href="{{ $link->real_url }}" class="btn btn-secondary w-100">{{ $link->title }}</a>
            </div>
        @endforeach
    </main>
</body>
</html>