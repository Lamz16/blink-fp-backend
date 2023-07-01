<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login &mdash; {{ env('APP_NAME') }}</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    
    <main class="container py-5">
        <h1 class="text-center">Login</h1>
        <form action="{{ route('guest.authenticate') }}" method="POST">
            @csrf
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

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember"  id="remember" />
                    <label class="form-check-label" for="remember"> Remember me </label>
                </div>
                </div>

                <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="{{ route('guest.register') }}">Register</a></p>
            </div>
        </form>
    </main>

    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>