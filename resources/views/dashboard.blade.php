<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard &mdash; {{ env('APP_NAME') }}</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="container">
        <h1>Dashboard</h1>
    </header>
    <section class="container">
        <h2>Tambah Link</h2>
        <form action="{{ route('link.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Judul Link</label>
                <input type="text" id="title" class="form-control" name="title" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <label for="real_url">Link Asli</label>
                <input type="text" id="real_url" class="form-control" name="real_url" value="{{old('real_url')}}">
            </div>

            <div class="form-group">
                <label for="short_url">Link Singkat</label>
                <input type="text" id="short_url" class="form-control" name="short_url" value="{{old('short_url')}}">
            </div>
            <button>Tambah</button>
        </form>
    </section>
    <section class="container">
        <h2>Daftar Link Kamu</h2>
        <table class="table table-strip">
            <thead>
                <tr>
                    <th>Judul Link</th>
                    <th>Link Asli</th>
                    <th>Link Singkat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($short_links as $link)
                    <tr>
                        <td>{{ $link->title }}</td>
                        <td><a href="{{ $link->real_url }}">{{ $link->real_url }}</a></td>
                        <td><a href="#{{ $link->short_url }}">{{ $link->short_url }}</a></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>