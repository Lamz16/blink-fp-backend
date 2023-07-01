<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register &mdash; {{ env('APP_NAME') }}</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    
    <main class="container py-5">
        <h1 class="text-center">Register</h1>
        <form action="{{ route('guest.store') }}" method="POST">
            @csrf
            <!-- Username input -->
            <div class="form-outline mb-4">
                <input type="text" id="username" name="username" value="{{ old('username') }}" class="form-control" />
                <label class="form-label" for="username">Username</label>
                @error('username')
                    <span class="invalid text-danger txt-small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Name input -->
            <div class="form-outline mb-4">
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" />
                <label class="form-label" for="name">Name</label>
                @error('name')
                    <span class="invalid text-danger txt-small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" />
                <label class="form-label" for="email">Email address</label>
                @error('email')
                    <span class="invalid text-danger txt-small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control" />
                <label class="form-label" for="password">Password</label>
                @error('password')
                    <span class="invalid text-danger txt-small">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-outline mb-4">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" />
                <label class="form-label" for="password_confirmation">Password Confirmation</label>
                @error('password_confirmation')
                    <span class="invalid text-danger txt-small">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Already account? <a href="{{ route('guest.login') }}">Login</a></p>
            </div>
        </form>
    </main>

    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>