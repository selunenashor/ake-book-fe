@extends('layout.admin')

@section('title')
Quản lí sách
@endsection

@section('scss')
@vite('resources/scss/admin/managerPage.scss')
@endsection

@section('content')
<div class="manage-book-container">
    <div class="search-field">
        <div class="col">
            <div class="text-input">
                <div class="input-label">Tên sách</div>
                <div class="input-zone">
                    <input type="text">
                </div>
            </div>
            <div class="select-input">
                <div class="input-label">Ngày xuất bản</div>
                <div class="input-zone">
                    <input type="date" name="date-start" id="date-start">
                    <span>-</span>
                    <input type="date" name="date-end" id="date-end">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="text-input">
                <div class="input-label">Tác giả</div>
                <div class="input-zone">
                    <input type="text">
                </div>
            </div>
            <div class="text-input">
                <div class="input-label">Ngôn ngữ</div>
                <div class="input-zone">
                    <select name="lang" id="lang">
                        <option value="">Tiếng Việt</option>
                        <option value="">Tiếng Anh</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="add-book">
        <button id="add-author-button" data-bs-toggle="modal" data-bs-target="#addBookModal">
            Thêm sách...
        </button>
    </div>
    <div class="result-field">
        <table>
            <thead>
                <td>ID</td>
                <td>Tên sách</td>
                <td>Tác giả</td>
                <td></td>
            </thead>
            <tbody>

                @foreach ($data as $item)
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['title'] ?></td>
                    <td><?= $item['authors'][0]['name'] ?></td>
                    <td>
                        <a href="/admin/book/<?php echo $item['id'] ?>" class="edit button">Xem/Sửa</a>
                        <button class="delete btn btn-danger">Xóa</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Thêm sách</b></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body error" id="error_addBook"></div>
            <div class="modal-body">
                <div class="modal-field">
                    <label for="title"><b>Tên sách <span class="required">(*)</span></b></label>
                    <input type="text" name="title" id="title" required>
                </div>
                <div class="modal-field">
                    <label for="author"><b>Tác giả <span class="required">(*)</span></b></label>
                    <select name="author" id="author">
                        @foreach ($author as $item)
                            <option value="<?= $item['id']?>"><?= $item['name']?></option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-field">
                    <label for="genres"><b>Thể loại <span class="required">(*)</span></b></label>
                    <label>Nếu có nhiều thể loại, phân cách bằng dấu phẩy (ví dụ: thể loại 1, thể loại 2)</label>
                    <input type="text" name="genres" id="genres">
                </div>
                <div class="modal-field">
                    <label for="publishedAt"><b>Thời gian xuất bản <span class="required">(*)</span></b></label>
                    <input type="datetime-local" name="publishedAt" id="publishedAt">
                </div>
                <div class="modal-field">
                    <label for="publisher"><b>Nhà xuất bản <span class="required">(*)</span></b></label>
                    <input type="text" name="publisher" id="publisher">
                </div>
                <div class="modal-field">
                    <label for="totalPages"><b>Số trang <span class="required">(*)</span></b></label>
                    <input type="number" name="totalPages" id="totalPages">
                </div>
                <div class="modal-field">
                    <label for="categories"><b>Phân loại <span class="required">(*)</span></b></label>
                    <label>Nếu có nhiều phân loại, phân cách bằng dấu phẩy (ví dụ: phân loại 1, phân loại 2)</label>
                    <input type="text" name="categories" id="categories">
                </div>
                <div class="modal-field">
                    <label for="language"><b>Ngôn ngữ <span class="required">(*)</span></b></label>
                    <input type="text" name="language" id="language">
                </div>
                <div class="modal-field">
                    <label for="description"><b>Mô tả <span class="required">(*)</span></b></label>
                    <input type="text" name="description" id="description">
                </div>
                <div class="modal-field">
                    <label for="image"><b>Hình ảnh <span class="required">(*)</span></b></label>
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
                <button id="addBookConfirm">Thêm</button>
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
                <button id="urlImageConfirm" data-bs-toggle="modal" data-bs-target="#addBookModal">Xác nhận</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    @vite('resources/js/admin/bookListjs.js')
@endsection
