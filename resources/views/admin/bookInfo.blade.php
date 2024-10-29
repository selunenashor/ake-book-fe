@extends('layout.admin')

@section('title')
Tên sách
@endsection

@section('scss')
@vite('resources/scss/admin/infoPage.scss')
@endsection

@section('content')
<div class="info">
    <div class="book_cover">
        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
    </div>
    <div class="book_info">
        <div class="info_tag">
            <div class="label">Tên sách</div>
            <div class="value">
                <div class="plain-value">Giáo trình Triết học Marx - Lenin</div>
                <input type="text" class="input-value" value="Giáo trình Triết học Marx - Lenin">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Tác giả</div>
            <div class="value">
                <div class="plain-value">Bộ Giáo Dục và Đào Tạo</div>
                <input type="text" class="input-value" value="Bộ Giáo Dục và Đào Tạo">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Quốc gia</div>
            <div class="value">
                <div class="plain-value">Việt Nam</div>
                <input type="text" class="input-value" value="Việt Nam">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Ngôn ngữ</div>
            <div class="value">
                <div class="plain-value">Tiếng Việt</div>
                <input type="text" class="input-value" value="Tiếng Việt">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Chủ đề</div>
            <div class="value">
                <div class="plain-value">Triết học</div>
                <input type="text" class="input-value" value="Triết học">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Thể loại</div>
            <div class="value">
                <div class="plain-value">Giáo trình</div>
                <input type="text" class="input-value" value="Giáo trình">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Nhà xuất bản</div>
            <div class="value">
                <div class="plain-value">Nhà xuất bản Chính trị quốc gia Sự thật</div>
                <input type="text" class="input-value" value="Nhà xuất bản Chính trị quốc gia Sự thật">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Năm phát hành</div>
            <div class="value">
                <div class="plain-value">2019</div>
                <input type="text" class="input-value" value="2019">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Số trang</div>
            <div class="value">
                <div class="plain-value">500</div>
                <input type="text" class="input-value" value="500">
            </div>
        </div>
    </div>
</div>
<div class="action">
    <button id="edit">Chỉnh sửa dữ liệu</button>
    <button id="view">Hủy chỉnh sửa</button>
    <button id="confirm">Thay đổi dữ liệu</button>
</div>
@endsection

@section('script')
@vite('resources/js/admin/infoPagejs.js')
@endsection
