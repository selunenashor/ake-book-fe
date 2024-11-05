@extends('layout.user')

@section('scss')
    @vite('resources/scss/anonymous/searchPage.scss')
@endsection

@section('title')
    <title>Main Page</title>
@endsection

@section('content')
    <div class="container">
        <div class="img_container">
            <img src="{{Vite::asset('resources/img/logo_main.png')}}" alt="Image" class="logo">
        </div>
        <form class="search-form">
            <input type="text" name="q" class="search-input" id="search-input">
            <div class="buttons">
                <button id="searchViaMeaning">Tìm kiếm theo ngữ nghĩa</button>
            </div>
        </form>
    </div>
@endsection

@section('script')

@endsection
