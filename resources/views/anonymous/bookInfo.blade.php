@extends('layout.user')

@section('scss')
    @vite('resources/scss/anonymous/infoPage.scss')
@endsection

@section('title')
    <title>Giáo Trình Triết Học Marx - Lenin</title>
@endsection

@section('username')
    ptk771
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
    <div class="favourite">
        <button class="unmark">
            <i class="fa-solid fa-star"></i>
            Đánh dấu là yêu thích
        </button>
    </div>
    <div class="info">
        <div class="book_cover">
            <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
        </div>
        <div class="book_info">
            <div class="info_tag">
                <div class="label">Tên sách</div>
                <div class="value">Giáo trình Triết học Marx - Lenin</div>
            </div>
            <div class="info_tag">
                <div class="label">Tác giả</div>
                <div class="value">Bộ Giáo Dục và Đào Tạo</div>
            </div>
            <div class="info_tag">
                <div class="label">Quốc gia</div>
                <div class="value">Việt Nam</div>
            </div>
            <div class="info_tag">
                <div class="label">Ngôn ngữ</div>
                <div class="value">Tiếng Việt</div>
            </div>
            <div class="info_tag">
                <div class="label">Chủ đề</div>
                <div class="value">Triết học</div>
            </div>
            <div class="info_tag">
                <div class="label">Thể loại</div>
                <div class="value">Giáo trình</div>
            </div>
            <div class="info_tag">
                <div class="label">Nhà xuất bản</div>
                <div class="value">Nhà xuất bản Chính trị quốc gia Sự thật</div>
            </div>
            <div class="info_tag">
                <div class="label">Năm phát hành</div>
                <div class="value">2019</div>
            </div>
            <div class="info_tag">
                <div class="label">Số trang</div>
                <div class="value">500</div>
            </div>
        </div>
    </div>
@endsection
