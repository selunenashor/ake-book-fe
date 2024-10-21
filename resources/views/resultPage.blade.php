@extends('layout.user')

@section('scss')
    @vite('resources/scss/resultPage.scss')
@endsection

@section('title')
    <title>Kết quả cho ...</title>
@endsection

@section('content')
    <div class="form-container">
        <form class="search-form">
            <input type="text" name="q" class="search-input">
            <div class="buttons">
                <button>Tìm kiếm theo ngữ nghĩa</button>
                <button>Tìm kiếm thông thường</button>
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
            <button>
                <div class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Tên sách x3.14
                    </div>
                </div>
            </button>
            <button>
                <div class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Tên sách x3.14
                    </div>
                </div>
            </button><button>
                <div class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Tên sách x3.14
                    </div>
                </div>
            </button><button>
                <div class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Tên sách x3.14
                    </div>
                </div>
            </button><button>
                <div class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Tên sách x3.14
                    </div>
                </div>
            </button><button>
                <div class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Tên sách x3.14
                    </div>
                </div>
            </button><button>
                <div class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Tên sách x3.14
                    </div>
                </div>
            </button><button>
                <div class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Tên sách x3.14
                    </div>
                </div>
            </button><button>
                <div class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Tên sách x3.14
                    </div>
                </div>
            </button><button>
                <div class="book">
                    <div class="book_cover">
                        <img src="https://images.sachquocgia.vn/Picture/2024/3/21/image-20240321142038119.jpg" alt="Books Cover">
                    </div>
                    <div class="book_name">
                        Tên sách x3.14
                    </div>
                </div>
            </button>

        </div>
    </div>
@endsection
