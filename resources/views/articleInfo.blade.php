@extends('layout.user')

@section('scss')
    @vite('resources/scss/infoPage.scss')
@endsection

@section('title')
    <title>Nhà văn Nguyễn Nhật Ánh</title>
@endsection

@section('content')
    <div class="form-container">
        <form class="search-form">
            <input type="text" name="q" class="search-input">
            <div class="buttons">
                <button>Tìm kiếm theo ngữ nghĩa</button>
                <button>Tìm kiếm thông thường</button>
            </div>
        </form>
    </div>
    <div class="info">
        <div class="book_cover">
            <img src="https://www.nxbtre.com.vn/Images/Writer/nxbtre_thumb_30552016_085555.jpg" alt="Books Cover">
        </div>
        <div class="book_info">
            <div class="info_tag">
                <div class="label">Họ tên</div>
                <div class="value">Nguyễn Nhật Ánh</div>
            </div>
            <div class="info_tag">
                <div class="label">Quốc tịch</div>
                <div class="value">Việt Nam</div>
            </div>
            <div class="info_tag">
                <div class="label">Năm sinh</div>
                <div class="value">1955</div>
            </div>
            <div class="info_tag">
                <div class="label">Quê quán</div>
                <div class="value">Bình Quế, Thăng Bình, Quảng Nam, Việt Nam</div>
            </div>
            <div class="info_tag">
                <div class="label">Các tác phẩm</div>
                <div class="value">
                    <a href="">Chuyện cổ tích dành cho người lớn (tập truyện, 1987)</a><br>
                    <a href="">Cô gái đến từ hôm qua (truyện dài, 1989)</a><br>
                    <a href="">Kính vạn hoa (bộ truyện 54 tập, 1995-2010)</a><br>
                    <a href="">Tôi thấy hoa vàng trên cỏ xanh (truyện dài, 2010)</a><br>
                    <a href="">Có hai con mèo ngồi bên cửa sổ (truyện dài, 2012)</a><br>
                </div>
            </div>

        </div>
    </div>
@endsection
