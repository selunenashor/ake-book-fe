<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/scss/layout/user.scss')
    @vite('resources/js/app.js')
    @yield('scss')
    @yield('title')
</head>

<body>
    <div class="user_header">

        <div class="homePage">
            <a href="/">
                <img src="{{Vite::asset('resources/img/logo_white.png')}}" alt="Image" class="logo">
            </a>
        </div>
        @if ($username)
        <button class="green" id="user-menu">
            <i class="fa-regular fa-user"></i>
            <?= $username ?>
        </button>
        <div class="user_menu">
            <ul>
                <li>
                    <a href="/admin/books">
                        <i class="fa-solid fa-book"></i>
                        Quản lí sách
                    </a>
                </li>
                <li>
                    <a href="/admin/authors">
                        <i class="fa-regular fa-id-badge"></i>
                        Quản lí người dùng
                    </a>
                </li>
                <li>
                    <a id="logout">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Đăng xuất
                    </a>
                </li>
            </ul>
        </div>
        @else
        <button onclick="window.location.href='/login'">
            <i class="fa-solid fa-right-to-bracket"></i>
            Đăng nhập
        </button>
        @endif
    </div>

    <div class="user_content">
        @yield('content')
    </div>


    @yield('script')
    @vite('resources/js/layout/userjs.js')
</body>

</html>
