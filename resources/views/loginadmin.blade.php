<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="css/loginadmin.css">
    <style>
        /* Add your additional styles here */
        .button {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-admin">
        <form action="{{ route('postloginadmin') }}" method="POST">
            @csrf
            <div class="rectangle-24"></div>
            <div class="log-in">Log in</div>
            <input class="rectangle-25" type="text" placeholder="Username atau Email" name="email" required>
            <input class="rectangle-26" type="password" placeholder="Password..." name="password" required>
            <input type="submit" name="login" value="Login" class="rectangle-27 button">
        </form>
        <div class="login-as-user-here">
            <span>
                <span class="login-as-user-here-span">Login As</span>
                <a href="/login" class="login-as-user-here-span2">User Here</a>
            </span>
        </div>
    </div>
</body>
</html>
