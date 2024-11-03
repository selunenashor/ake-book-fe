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
        <img src="<?php echo $data['image'] ?? '' ?>" alt="No Avatar">
    </div>
    <div class="author_info viewMode">
        <div class="info_tag error" style="display: block"></div>
        <div class="info_tag hidden_tag">
            <div class="value">
                <input type="text" class="input-value" id="id" value="<?= $data['id']?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Họ tên</div>
            <div class="value">
                <div class="plain-value"><?php echo $data['name'] ?></div>
                <input type="text" class="input-value" id="name" value="<?php echo $data['name'] ?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Bí danh</div>
            <div class="value">
                <div class="plain-value"><?php echo $data['stageName'] ?? '' ?></div>
                <input type="text" class="input-value" id="stageName" value="<?php echo $data['stageName'] ?? '' ?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Quốc tịch</div>
            <div class="value">
                <div class="plain-value"><?php echo $data['nationality'] ?? '' ?></div>
                <input type="text" class="input-value" id="nationality" value="<?php echo $data['nationality'] ?? '' ?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Ngày sinh</div>
            <div class="value">
                <div class="plain-value"><?php echo $data['birthDate'] ?? '' ?></div>
                <input type="date" class="input-value" id="birthDate" value="<?php echo $data['birthDate'] ?? '' ?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Nơi sinh</div>
            <div class="value">
                <div class="plain-value"><?php echo $data['birthPlace'] ?? '' ?></div>
                <input type="text" class="input-value" id="birthPlace" value="<?php echo $data['birthPlace'] ?? '' ?>">
            </div>
        </div>
        <div class="info_tag checkBox_tag">
            <div class="label"></div>
            <div class="value">
                <input type="checkbox" class="input-value" id="isDeath" for="isDeathChecked" <?php if ($data['deathDate'] !== null) {echo 'checked';}?>>
                <label for="isDeath">Đã mất</label>
            </div>
        </div>
        <div class="info_tag" id="isDeathChecked">
            <div class="label">Năm mất</div>
            <div class="value">
                <div class="plain-value"><?php echo $data['deathDate'] ?? '' ?></div>
                <input type="date" class="input-value" id="deathDate" value="<?php echo $data['deathDate'] ?? '' ?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Website</div>
            <div class="value">
                <div class="plain-value"><?php echo $data['website'] ?? '' ?></div>
                <input type="text" class="input-value" id="website" value="<?php echo $data['website'] ?? '' ?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Mô tả</div>
            <div class="value">
                <div class="plain-value"><?php echo $data['description'] ?? '' ?></div>
                <input type="text" class="input-value" id="description" value="<?php echo $data['description'] ?? '' ?>">
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
                    hidden value="<?php echo $data['image'] ?? '' ?>">
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
@vite('resources/js/admin/authorPagejs.js')
@endsection
