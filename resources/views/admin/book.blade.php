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
    <div class="result-field">
        <table>
            <thead>
                <td>ID</td>
                <td>Tên sách</td>
                <td>Tác giả</td>
                <td></td>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Giáo trình triết học Marx - Lenin</td>
                    <td>Bộ Giáo dục và Đào tạo</td>
                    <td>
                        <button class="edit">Xem/Sửa</button>
                        <button class="delete">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Giáo trình triết học Marx - Lenin</td>
                    <td>Bộ Giáo dục và Đào tạo</td>
                    <td>
                        <button class="edit">Xem/Sửa</button>
                        <button class="delete">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Giáo trình triết học Marx - Lenin</td>
                    <td>Bộ Giáo dục và Đào tạo</td>
                    <td>
                        <button class="edit">Xem/Sửa</button>
                        <button class="delete">Xóa</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')

@endsection
