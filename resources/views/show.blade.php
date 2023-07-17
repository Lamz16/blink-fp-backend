<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $user->username }} &mdash; {{ env('APP_NAME') }}</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
            background-image: url(images/kratzer.png);
        }
    </style>
</head>
<body>
    <!-- <header class="container">
        <h1>{{ $user->username }}</h1>
    </header> -->

    <div class="container">
            <div class="row justify-content-center mt-4">
                
                <img src={{ asset('images/user/user_1.png') }} alt="User Profile" class="rounded-circle img-thumbnail border border-info" style="height:96px; width:96px;">
            </div>
            <div class="row justify-content-center mt-3 mb-3">
                <!-- ((3)) - Put your brand name or whatever you want -->
                <h3 style="color:#324D5C;">{{ $user->username }}</h3>
            </div>

            <section class="container row justify-content-center mx-2">
                    @foreach ($short_links as $link)
                        <a href="{{ $link->real_url }}" class="w-100 d-block text-center py-3 px-auto btn btn-outline-info btn-lg btn-block">{{ $link->title }}</a>
                    @endforeach
            </section>

            <div class="row justify-content-center mt-3 mb-3">
                <ul class="list-unstyled">
                    <!-- ((5)) - Social icon blocks - you can add as many as you want -->
                    <li class="list-inline-item ">
                        <a href="#">
                            <img src="images/blink-icon.png">
                        </a>
                        
                    </li>
                </ul>
            </div>


    </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>