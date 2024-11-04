<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite("resources/scss/anonymous/login.scss")
    @vite("resources/js/anonymous/loginjs.js")
    <title>Login Form</title>

</head>
<body>
    <div class="login-container">
        <h2><b>Đăng nhập</b></h2>
        <div class="error">
            <b><span class="error"></span></b>
        </div>
        <input type="text" id="username" name="username" placeholder="Tài khoản" required>
        <input type="password" id="password" name="password" placeholder="Mật khẩu" required>
        <button id="login">Login</button>
    </div>
</body>
</html>
