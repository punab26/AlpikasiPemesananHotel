<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        .register-card {
            background-color: rgba(255, 255, 255, 0.9); /* Add transparency to the card background */
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            width: 100%;
        }
        .card-header {
            font-weight: bold;
            font-size: 1.25rem;
            text-align: center;
            background-color: #007bff;
            color: white;
            border-radius: 10px 10px 0 0;
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
        .card-body {
            padding: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="card register-card">
        <div class="card-header">
            {{ __('Register') }}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                    @if ($errors->has('name'))
                        <div class="text-danger mt-2">{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username">
                    @if ($errors->has('email'))
                        <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
                    @endif
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                    @if ($errors->has('password'))
                        <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                    @if ($errors->has('password_confirmation'))
                        <div class="text-danger mt-2">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a class="text-decoration-none" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
