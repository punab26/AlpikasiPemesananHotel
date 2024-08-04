<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('vendor/home/assets/img/portfolio/fullsize/1.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-card {
            background-color: rgba(255, 255, 255, 0.9); /* Add transparency to the card background */
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .card-header {
            font-weight: bold;
            font-size: 1.25rem;
        }
        .card-body {
            font-size: 1rem;
        }
        .form-label {
            margin-bottom: 0.5rem;
        }
        .form-control {
            margin-bottom: 1rem;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="card login-card col-md-6 col-lg-4">
        <div class="card-header bg-primary text-white text-center">
            {{ __('LOGIN BOOKING HOTEL') }}
        </div>
        <div class="card-body">
            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                    @if ($errors->has('email'))
                        <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
                    @endif
                </div>

                <!-- Password -->
                <div class="mt-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                    @if ($errors->has('password'))
                        <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
                    @endif
                </div>

                <!-- Remember Me -->
                <div class="form-check mt-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    @if (Route::has('register'))
                        <a class="text-decoration-none" href="{{ route('register') }}">
                            {{ __('Dont have an account yet?') }}
                        </a>
                    @endif

                    <button type="submit" class="btn btn-primary">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
