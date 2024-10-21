<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/scss/layout/user.scss')
    @yield('scss')
    @yield('title')
</head>
<body>
    <div class="user_header">
        <button><i class="fa-solid fa-bars"></i></button>
    </div>
    <div class="user_content">
        @yield('content')
    </div>
</body>
</html>
