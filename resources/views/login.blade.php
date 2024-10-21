<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources/scss/login.scss"])
    <title>Login Form</title>

</head>
<body>
    <div class="login-container">
        @if ($errors->any())
        <div class="error">
            <strong>{{ $errors->first() }}</strong>
        </div>
        @endif
        <form id="loginForm" action="{{ route('login.submit') }}" method="POST">
            @csrf
            <input type="text" id="account" name="account" placeholder="Tài khoản" required>
            <input type="password" id="password" name="password" placeholder="Mật khẩu" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
