@extends('layout.user')

@section('scss')
    @vite('resources/scss/user/info.scss')
@endsection

@section('title')
    <title>Thông tin cá nhân</title>
@endsection

@section('username')
    ptk771
@endsection

@section('content')
<div class="userInfo_container">
    <div class="userInfo">
        <h2>Thông tin cá nhân</h2>
        <form id="personalInfoForm">
            <div class="form-field">
                <label for="name">Họ tên:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-field">
                <label for="age">Tuổi:</label>
                <input type="number" id="age" name="age" required>
            </div>

            <div class="form-field">
                <label for="gender">Giới tính:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Nam</option>
                    <option value="female">Nữ</option>
                    <option value="other">Khác</option>
                </select>
            </div>

            <div class="form-field">
                <label for="address">Địa chỉ:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <button type="submit">Lưu thay đổi</button>
        </form>
    </div>
    <div class="passwordChange">
        <h2>Đổi mật khẩu</h2>
        <form id="passwordChangeForm">
            <div class="form-field">
                <label for="name">Mật khẩu cũ:</label>
                <input type="password" id="oldPassword" name="oldPassword" required>
            </div>

            <div class="form-field">
                <label for="age">Mật khẩu mới:</label>
                <input type="password" id="newPassword" name="newPassword" required>
            </div>

            <div class="form-field">
                <label for="address">Nhập lại mật khẩu mới:</label>
                <input type="password" id="confirmNewPassword" name="confirmNewPassword" required>
            </div>

            <button type="submit">Đổi mật khẩu</button>
        </form>
    </div>
</div>
@endsection
