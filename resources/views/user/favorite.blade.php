@extends('layout.user')

@section('scss')
    @vite('resources/scss/user/favorite.scss')
@endsection

@section('title')
    <title>Danh mục yêu thích</title>
@endsection

@section('username')
    ptk771
@endsection

@section('content')
<div class="userFavorite_container">
    <h1>Danh mục yêu thích</h1>
    <div class="content">
        <div class="book">
            <h2>Sách</h2>
            <div class="book-list">
                <a href="" class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Giáo trình Triết học Marx - Lenin
                    </div>
                </a>
                <a href="" class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Giáo trình Triết học Marx - Lenin
                    </div>
                </a>
                <a href="" class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Giáo trình Triết học Marx - Lenin
                    </div>
                </a>
                <a href="" class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Giáo trình Triết học Marx - Lenin
                    </div>
                </a>
            </div>
        </div>
        <div class="author">
            <h2>Tác giả</h2>
            <div class="author-list">
                <a href="" class="author">
                    <div class="avatar">
                        <img src="https://www.nxbtre.com.vn/Images/Writer/nxbtre_thumb_30552016_085555.jpg" alt="Avatar">
                    </div>
                    <div class="author_name">
                        Nguyễn Nhật Ánh
                    </div>
                </a>
                <a href="" class="author">
                    <div class="avatar">
                        <img src="https://www.nxbtre.com.vn/Images/Writer/nxbtre_thumb_30552016_085555.jpg" alt="Avatar">
                    </div>
                    <div class="author_name">
                        Nguyễn Nhật Ánh
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
