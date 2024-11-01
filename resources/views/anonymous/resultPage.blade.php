@extends('layout.user')

@section('scss')
    @vite('resources/scss/anonymous/resultPage.scss')
@endsection

@section('title')
    <title>Kết quả cho ...</title>
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
    <div class="result-container">
        <div class="sort-container">
            <span>Sắp xếp theo</span>
            <select name="sort" id="sort">
                <option value="">Tên sách (A - Z)</option>
                <option value="">Tên sách (Z - A)</option>
                <option value="">Tác giả (A - Z)</option>
                <option value="">Tác giả (Z - A)</option>
            </select>
        </div>
        <div class="result">
            <?php
                foreach ($data['data'] as $book) {
            ?>
                    <button>
                        <div class="book">
                            <div class="book_cover">
                                <img src="data:image/png;base64,<?php echo $book['image']?>" alt="Books Cover">
                            </div>
                            <div class="book_name">
                                <?php echo $book['title'] ?>
                            </div>
                        </div>
                    </button>
            <?php
                }
            ?>
        </div>
    </div>
@endsection

@section('script')

@endsection
