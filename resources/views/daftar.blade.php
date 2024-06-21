<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="css/daftar.css">
    <style>
        .button {
            cursor: pointer;
        }
        .alert {
            color: red;
            text-align: center;
        }

        .rectangle-27 {
            cursor: pointer;
        }

        .input-error {
            border-color: red;
        }
    </style>
</head>
<body>
    <div class="login-2">
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="rectangle-24"></div>
            <div class="registration">Registration</div>
            
            <!-- Username Input -->
            <input type="text" placeholder="Username" name="username" class="rectangle-25 {{ $errors->has('username') ? 'input-error' : '' }}" required value="{{ old('username') }}">

            <!-- Email Input -->
            <input type="email" placeholder="Email..." name="email" class="rectangle-26 {{ $errors->has('email') ? 'input-error' : '' }}" required value="{{ old('email') }}">

            <!-- Password Input -->
            <input type="password" placeholder="Password..." name="password" class="rectangle-262 {{ $errors->has('password') ? 'input-error' : '' }}" required>

            <!-- Password Confirmation Input -->
            <input type="password" placeholder="Confirm Password" name="password_confirmation" class="rectangle-263 {{ $errors->has('password_confirmation') ? 'input-error' : '' }}" required>

            <!-- Submit Button -->
            <input type="submit" value="submit" name="submit" class="rectangle-27">
        </form>

        <div class="already-have-an-account-login-here">
            <span>
                <span class="already-have-an-account-login-here-span">
                    Already have an account?
                </span>
                <a href="/login" class="already-have-an-account-login-here-span2">Login here</a>
            </span>
        </div>
    </div>
</body>
</html>
