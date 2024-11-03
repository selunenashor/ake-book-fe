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
        <img src="<?= $data['image'] ?>" alt="No Cover">
    </div>
    <div class="book_info viewMode">
        <div class="info_tag error" style="display: block"></div>
        <div class="info_tag hidden_tag">
            <div class="value">
                <input type="text" class="input-value" id="id" value="<?= $data['id']?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Tiêu đề sách</div>
            <div class="value">
                <div class="plain-value"><?= $data['title'] ?></div>
                <input type="text" class="input-value" id="title" value="<?= $data['title'] ?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Tác giả</div>
            <div class="value">
                <div class="plain-value"><?= $data['authors'][0]['name']?></div>
                <select name="author" id="author">
                    @foreach ($author as $item)
                        <option value="<?= $item['id']?>" <?php if ($item['id'] === $data['authors'][0]['id']){echo 'selected';}?>><?= $item['name']?></option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Thể loại</div>
            <div class="value">
                <div class="plain-value">
                    <?php
                    $c = count($data['genres']);
                    $genres_string = '';
                    foreach ($data['genres'] as $item) {
                        $genres_string .= $item;
                        $c -=1;
                        if ($c > 0){
                            $genres_string .= ', ';
                        }
                    }
                    echo $genres_string;
                    ?>
                </div>
                <input type="text" class="input-value" id="genres" value="<?= $genres_string ?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Thời gian xuất bản</div>
            <div class="value">
                <div class="plain-value">
                    <?php
                    $unixTimestamp = $data['publicationTime'];
                    $formattedDate = date('H:i d-m-y', $unixTimestamp);

                    $dateTime = new DateTime();
                    $dateTime->setTimestamp($unixTimestamp);

                    $formattedDateInput = $dateTime->format('Y-m-d\TH:i');
                    echo $formattedDate;
                    ?>
                </div>
                <input type="datetime-local" class="input-value" id="publishedAt" value="<?= $formattedDateInput ?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Nhà xuất bản</div>
            <div class="value">
                <div class="plain-value"><?= $data['publisher']?></div>
                <input type="text" class="input-value" id="publisher" value="<?= $data['publisher']?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Số trang</div>
            <div class="value">
                <div class="plain-value"><?= $data['totalPages']?></div>
                <input type="text" class="input-value" id="totalPages" value="<?= $data['totalPages']?>">
            </div>
        </div>
        <div class="info_tag">
            <div class="label">Ngôn ngữ</div>
            <div class="value">
                <div class="plain-value"><?= $data['language']?></div>
                <input type="text" class="input-value" id="language" value="<?= $data['language']?>">
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
                    hidden value="<?= $data['image'] ?>">
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
@vite('resources/js/admin/bookPagejs.js')
@endsection
