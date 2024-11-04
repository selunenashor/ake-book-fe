@extends('layout.user')

@section('scss')
    @vite('resources/scss/anonymous/infoPage.scss')
@endsection

@section('title')
    <title><?= $data['title'] ?></title>
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
                        $string = "";
                        if ($data['genres']){
                            $c = count($data['genres']);

                            foreach ($data['genres'] as $genre) {
                                $string .= $genre;
                                $c-=1;
                                if ($c!==0){
                                    $string .= ", ";
                                }
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
                <div class="value">
                    <?php

                    if($data['publicationTime']){
                        $unixTimestamp = $data['publicationTime'];
                        $formattedDate = date('H:i d-m-Y', $unixTimestamp);
                        echo $formattedDate;
                    }
                    else {
                        echo '';
                    }
                    ?>
                </div>
            </div>
            <div class="info_tag">
                <div class="label">Số trang</div>
                <div class="value"><?php echo $data['totalPages']  ?? ''?></div>
            </div>
        </div>
    </div>
@endsection
