<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="css/loginuser1.css">
    <style>
        /* Add your styles here */
        .button {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-1">
        <form action="{{ route('postlogin') }}"  method="POST">
            @csrf
            <div class="rectangle-24"></div>
            <div class="log-in">Log in</div>
            <input class="rectangle-25" type="text" placeholder="Username atau Email" name="email" required>
            <input class="rectangle-26" type="password" placeholder="Password..." name="password" required>
            <input type="submit" name="login" value="Login" class="rectangle-27 button">
        </form>
        <div class="don-t-have-an-account-register-here">
            <span>
                <span class="don-t-have-an-account-register-here-span">
                    Don’t have an account?
                </span>
                <a href="/daftar" class="don-t-have-an-account-register-here-span2">
                    Register Here
                </a>
            </span>
        </div>
        <a href="/loginadmin" class="login-as-admin-here">Login As Admin Here</a>
    </div>
</body>
</html>
