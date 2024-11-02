<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @vite('resources/scss/layout/admin.scss')
    @vite('resources/js/app.js')
    @yield('scss')
</head>
<body>
    <div class="admin-container">
        <div class="sidebar">
            <div class="logo-container">
                <a href="">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png" alt="Image" class="logo">
                </a>
            </div>
            <div class="menu-container">
                <ul>
                    <li class="<?php if($menu_selected === 1) {echo 'selected';} ?>">
                        <a href="/admin/books">Quản lí sách</a>
                    </li>
                    <li class="<?php if($menu_selected === 2) {echo 'selected';} ?>">
                        <a href="/admin/authors">Quản lí tác giả</a>
                    </li>
                    <li>
                        <a href="">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
    @yield('script')
</body>
</html>
