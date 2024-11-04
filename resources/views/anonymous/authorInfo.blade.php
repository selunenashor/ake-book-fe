@extends('layout.user')

@section('scss')
    @vite('resources/scss/anonymous/infoPage.scss')
@endsection

@section('title')
    <title>Tác giả <?= $data['name'] ?? '' ?></title>
@endsection

@section('content')
    <div class="form-container">
        <form class="search-form">
            <input type="text" name="q" class="search-input" id="search-input" value="<?php echo $keyword ?? ''?>">
            <div class="buttons">
                <button id="searchViaMeaning">Tìm kiếm theo ngữ nghĩa</button>
            </div>
        </form>
    </div>
    <div class="info">
        <div class="avatar">
            <img src="<?= $data['image'] ?? '' ?>" alt="Avatar">
        </div>
        <div class="author_info">
            <div class="info_tag">
                <div class="label">Họ tên</div>
                <div class="value"><?= $data['name'] ?? '' ?></div>
            </div>
            <div class="info_tag">
                <div class="label">Bí danh</div>
                <div class="value"><?= $data['stageName'] ?? '' ?></div>
            </div>
            <div class="info_tag">
                <div class="label">Quốc tịch</div>
                <div class="value"><?= $data['nationality'] ?? '' ?></div>
            </div>
            <div class="info_tag">
                <div class="label">Ngày sinh</div>
                <div class="value"><?= $data['birthDate'] ?? '' ?></div>
            </div>
            <div class="info_tag">
                <div class="label">Nơi sinh</div>
                <div class="value"><?= $data['birthPlace'] ?? '' ?></div>
            </div>
            @if ($data['deathDate'])
                <div class="info_tag">
                    <div class="label">Ngày mất</div>
                    <div class="value"><?= $data['deathDate'] ?? '' ?></div>
                </div>
            @endif
            <div class="info_tag">
                <div class="label">Website</div>
                <div class="value"><?= $data['website'] ?? '' ?></div>
            </div>
            <div class="info_tag">
                <div class="label">Mô tả</div>
                <div class="value"><?= $data['description'] ?? '' ?></div>
            </div>
        </div>
    </div>
@endsection
