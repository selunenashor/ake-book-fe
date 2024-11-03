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
        <img src="https://www.nxbtre.com.vn/Images/Writer/nxbtre_thumb_30552016_085555.jpg" alt="No Avatar">
    </div>
    <div class="author_info viewMode">
        <div class="info_tag error"></div>
        <div class="info_tag hidden_tag">
            <div class="value">
                <input type="text" class="input-value" id="id" value="5">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Họ tên</div>
            <div class="value">
                <div class="plain-value">Nguyễn Nhật Ánh</div>
                <input type="text" class="input-value" id="name" value="Nguyễn Nhật Ánh">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Bí danh</div>
            <div class="value">
                <div class="plain-value"></div>
                <input type="text" class="input-value" id="stageName" value="">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Quốc tịch</div>
            <div class="value">
                <div class="plain-value">Việt Nam</div>
                <input type="text" class="input-value" id="nationality" value="Việt Nam">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Năm sinh</div>
            <div class="value">
                <div class="plain-value"></div>
                <input type="date" class="input-value" id="birthDate" value="">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Nơi sinh</div>
            <div class="value">
                <div class="plain-value">Việt Nam</div>
                <input type="text" class="input-value" id="birthPlace" value="Việt Nam">
            </div>
        </div>
        <div class="info_tag checkBox_tag">
            <div class="label"></div>
            <div class="value">
                <input type="checkbox" class="input-value" id="isDeath" for="isDeathChecked">
                <label for="isDeath">Đã mất</label>
            </div>
        </div>
        <div class="info_tag" id="isDeathChecked">
            <div class="label">Năm mất</div>
            <div class="value">
                <input type="date" class="input-value" id="deathDate" value="">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Website</div>
            <div class="value">
                <div class="plain-value">nguyennhatanh.com</div>
                <input type="text" class="input-value" id="website" value="nguyennhatanh.com">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Mô tả</div>
            <div class="value">
                <div class="plain-value">Nguyễn Nhật Ánh</div>
                <input type="text" class="input-value" id="description" value="Nguyễn Nhật Ánh">
            </div>
        </div>
        <div class="info_tag imageInput">
            <div class="label">Hình ảnh</div>
            <div class="value">
                <div id="image-button">
                    <button  id="urlImage" data-bs-target="#URLImageModal" data-bs-toggle="modal">URL...</button>
                    <button  id="localImage">Tải tệp lên...</button>
                </div>
            </div>
        </div>
        <div class="info_tag imageInput">
            <div class="label"></div>
            <div class="value">
                <input type="text" readonly class="form-control-plaintext" name="image" id="file-name">
                <input type="text" readonly class="form-control-plaintext" name="image" id="image-string"
                    hidden>
                <input type="file" id="fileInput" accept="image/*" style="display: none;">
            </div>
        </div>
    </div>
</div>
<div class="action">
    <button id="edit">Chỉnh sửa dữ liệu</button>
    <button id="view">Hủy chỉnh sửa</button>
    <button id="confirm">Thay đổi dữ liệu</button>
</div>
<div class="modal fade" id="URLImageModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2"><b>URL</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-field">
                    <label for="urlImage"><b>Nhập URL</b></label>
                    <input type="text" name="urlImage" id="urlImage">
                </div>
            </div>
            <div class="modal-footer">
                <button id="urlImageConfirm" data-bs-dismiss="modal">Xác nhận</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@vite('resources/js/admin/infoPagejs.js')
@endsection
