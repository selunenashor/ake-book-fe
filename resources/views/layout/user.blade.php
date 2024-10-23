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
        <button class="green" id="user-menu">
            <i class="fa-regular fa-user"></i>
            @yield('username')
        </button>
        <div class="homePage">
            <a href="/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png" alt="Image" class="logo">
            </a>
        </div>
        <div class="user_menu">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-id-badge"></i>
                        Thông tin cá nhân
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-book"></i>
                        Danh mục yêu thích
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Đăng xuất
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="user_content">
        @yield('content')
    </div>


    @yield('script')
    @vite('resources/js/layout/userjs.js')
</body>

</html>
