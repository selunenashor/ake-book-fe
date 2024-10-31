@extends('layout.admin')

@section('title')
Tên tác giả
@endsection

@section('scss')
@vite('resources/scss/admin/infoPage.scss')
@endsection

@section('content')
<div class="info">
    <div class="avatar">
        <img src="https://www.nxbtre.com.vn/Images/Writer/nxbtre_thumb_30552016_085555.jpg" alt="Avatar">
    </div>
    <div class="author_info">
        <div class="info_tag">
            <div class="label">Tên tác giả</div>
            <div class="value">
                <div class="plain-value">Nguyễn Nhật Ánh</div>
                <input type="text" class="input-value" value="Nguyễn Nhật Ánh">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Quốc tịch</div>
            <div class="value">
                <div class="plain-value">Việt Nam</div>
                <input type="text" class="input-value" value="Việt Nam">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Năm sinh</div>
            <div class="value">
                <div class="plain-value">1955</div>
                <input type="number" class="input-value" value="1955">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Quê quán</div>
            <div class="value">
                <div class="plain-value">Bình Quế, Thăng Bình, Quảng Nam, Việt Nam</div>
                <input type="text" class="input-value" value="Bình Quế, Thăng Bình, Quảng Nam, Việt Nam">
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
