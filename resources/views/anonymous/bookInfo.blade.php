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
            <input type="text" name="q" class="search-input" id="search-input" value="<?php echo $keyword ?? ''?>">
            <div class="buttons">
                <button id="searchViaMeaning">Tìm kiếm theo ngữ nghĩa</button>
                <button id="searchViaKeywords">Tìm kiếm thông thường</button>
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
            <img src="data:image/png;base64,<?php echo $data['image'] ?? ''?>" alt="Books Cover">
        </div>
        <div class="book_info">
            <div class="info_tag">
                <div class="label">Tên sách</div>
                <div class="value"><?php echo $data['title'] ?? ''?></div>
            </div>
            <div class="info_tag">
                <div class="label">Tác giả</div>
                <div class="value"></div>
            </div>
            <div class="info_tag">
                <div class="label">Ngôn ngữ</div>
                <div class="value"><?php echo $data['language'] ?? ''?></div>
            </div>
            <div class="info_tag">
                <div class="label">Thể loại</div>
                <div class="value">
                    <?php
                        $c = count($data['genres']);
                        $string = "";
                        foreach ($data['genres'] as $genre) {
                            $string .= $genre;
                            $c-=1;
                            if ($c!==0){
                                $string .= ", ";
                            }
                        }
                        echo $string;
                    ?>
                </div>
            </div>
            <div class="info_tag">
                <div class="label">Phân loại</div>
                <div class="value">
                    <?php
                        $c = count($data['categories']);
                        $string = "";
                        foreach ($data['categories'] as $category) {
                            $string .= $category;
                            $c-=1;
                            if ($c!==0){
                                $string .= ", ";
                            }
                        }
                        echo $string;
                    ?>
                </div>
            </div>
            <div class="info_tag">
                <div class="label">Nhà xuất bản</div>
                <div class="value"><?php echo $data['publisher'] ?? '' ?></div>
            </div>
            <div class="info_tag">
                <div class="label">Thời gian phát hành</div>
                <div class="value"><?php echo $data['publicationTime']  ?? ''?></div>
            </div>
            <div class="info_tag">
                <div class="label">Số trang</div>
                <div class="value"><?php echo $data['totalPages']  ?? ''?></div>
            </div>
        </div>
    </div>
@endsection
