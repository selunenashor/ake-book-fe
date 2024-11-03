@extends('layout.admin')

@section('title')
Quản lí tác giả
@endsection

@section('scss')
@vite('resources/scss/admin/managerPage.scss')
@endsection

@section('content')
<div class="manage-author-container">
    <div class="search-field">
        <div class="col">
            <div class="text-input">
                <div class="input-label">Tên tác giả</div>
                <div class="input-zone">
                    <input type="text">
                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
    <div class="add-author">
        <button id="add-author-button" data-bs-toggle="modal" data-bs-target="#addAuthorModal">
            Thêm tác giả...
        </button>
    </div>
    <div class="result-field">
        <table>
            <thead>
                <td>ID</td>
                <td>Tác giả</td>
                <td></td>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>
                        <?php echo $item['id'] ?? ''?>
                    </td>
                    <td>
                        <?php echo $item['name'] ?? ''?>
                    </td>
                    <td>
                        <a href="/admin/author/<?php echo $item['id'] ?>" class="edit button">Xem/Sửa</a>
                        <button class="delete button btn btn-danger" author-name="<?php echo $item['name'] ?? ''?>" author-id="<?php echo $item['id'] ?? ''?>" data-bs-target="#DeleteAuthorModal" data-bs-toggle="modal">Xóa</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="addAuthorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Thêm tác giả</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body error" id="error_addAuthor"></div>
                <div class="modal-body">
                    <div class="modal-field">
                        <label for="name"><b>Họ tên <span class="required">(*)</span></b></label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="modal-field">
                        <label for="stageName"><b>Bí danh</b></label>
                        <input type="text" name="stageName" id="stageName">
                    </div>
                    <div class="modal-field">
                        <label for="nationality"><b>Quốc tịch</b></label>
                        <input type="text" name="nationality" id="nationality">
                    </div>
                    <div class="modal-field">
                        <label for="birthDate"><b>Ngày sinh</b></label>
                        <input type="date" name="birthDate" id="birthDate">
                    </div>
                    <div class="modal-field">
                        <label for="birthPlace"><b>Nơi sinh</b></label>
                        <input type="text" name="birthPlace" id="birthPlace">
                    </div>
                    <div class="modal-field">
                        <input type="checkbox" name="isDeath" id="isDeath" style="width: fit-content">
                        <label for="isDeath">Đã mất</label>
                    </div>
                    <div class="modal-field" id="authorDeathDate">
                        <label for="deathDate"><b>Năm mất</b></label>
                        <input type="date" name="deathDate" id="deathDate">

                    </div>
                    <div class="modal-field">
                        <label for="website"><b>Website</b></label>
                        <input type="text" name="website" id="website">
                    </div>
                    <div class="modal-field">
                        <label for="description"><b>Mô tả</b></label>
                        <input type="text" name="description" id="description">
                    </div>
                    <div class="modal-field">
                        <label for="image"><b>Hình ảnh</b></label>
                        <div id="image-button">
                            <button  id="urlImage" data-bs-target="#URLImageModal" data-bs-toggle="modal">URL...</button>
                            <button  id="localImage">Tải tệp lên...</button>
                        </div>
                        <input type="text" readonly class="form-control-plaintext" name="image" id="file-name">
                        <input type="text" readonly class="form-control-plaintext" name="image" id="image-string"
                            hidden>
                        <input type="file" id="fileInput" accept="image/*" style="display: none;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-bs-dismiss="modal">Huỷ</button>
                    <button id="addAuthorConfirm">Thêm</button>
                </div>
            </div>
        </div>
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
                <button id="urlImageConfirm" data-bs-toggle="modal" data-bs-target="#addAuthorModal">Xác nhận</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="DeleteAuthorModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2"><b>URL</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body error" id="error_delAuthor"></div>
            <div class="modal-body">
                <div class="modal-field">
                    <label for="urlImage"><b>Bạn chắc chắn muốn xoá tác giả <span style="color: red" id="delAuthorName"></span> chứ?</b></label>
                    <input type="text" readonly class="form-control-plaintext" name="image" id="idAuthorDelete"
                            hidden>
                </div>
            </div>
            <div class="modal-footer">
                <button id="DeleteAuthorConfirm" class="btn btn-danger">Xác nhận</button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
@vite('resources/js/admin/authorjs.js')
@endsection
