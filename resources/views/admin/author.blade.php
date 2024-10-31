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
                <div class="input-label">Tên tác giả</div>
                <div class="input-zone">
                    <input type="text">
                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
    <div class="result-field">
        <table>
            <thead>
                <td>ID</td>
                <td>Tác giả</td>
                <td></td>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nguyễn Nhật Ánh</td>
                    <td>
                        <button class="edit">Xem/Sửa</button>
                        <button class="delete">Xóa</button>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Nguyễn Nhật Ánh</td>
                    <td>
                        <button class="edit">Xem/Sửa</button>
                        <button class="delete">Xóa</button>
                    </td>
                </tr><tr>
                    <td>1</td>
                    <td>Nguyễn Nhật Ánh</td>
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
