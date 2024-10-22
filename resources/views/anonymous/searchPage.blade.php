@extends('layout.user')

@section('scss')
    @vite('resources/scss/anonymous/searchPage.scss')
@endsection

@section('title')
    <title>Main Page</title>
@endsection

@section('username')
    ptk771
@endsection

@section('content')
    <div class="container">
        <div class="img_container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png" alt="Image" class="logo">
        </div>
        <form class="search-form">
            <input type="text" name="q" class="search-input">
            <div class="buttons">
                <button>Tìm kiếm theo ngữ nghĩa</button>
                <button>Tìm kiếm thông thường</button>
            </div>
        </form>
    </div>
@endsection
