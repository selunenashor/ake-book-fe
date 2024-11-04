@extends('layout.user')

@section('scss')
    @vite('resources/scss/anonymous/resultPage.scss')
@endsection

@section('title')
    <title>Kết quả tìm kiếm cho <?= $keyword ?? '' ?></title>
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
            </div>
        </form>
    </div>
    <div class="result-container">

        <div class="result">
            <?php
                foreach ($data['data'] as $book) {
            ?>
                    <a href="/book/<?= $book['id']?>">
                        <div class="book">
                            <div class="book_cover">
                                <img src="<?php echo $book['image']?>" alt="Books Cover">
                            </div>
                            <div class="book_name">
                                <?php echo $book['title'] ?>
                            </div>
                        </div>
                    </a>
            <?php
                }
            ?>
        </div>
    </div>
@endsection

@section('script')

@endsection
