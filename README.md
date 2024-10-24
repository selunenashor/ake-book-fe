# Hướng dẫn sử dụng
## Yêu cầu:
- Đã cài Laravel (link hướng dẫn cài đặt: https://laravel.com/docs/11.x/installation#installing-php)
- Đã cài đặt Nodejs (link hướng dẫn cài đặt: https://nodejs.org/en/download/package-manager)

Phiên bản khuyến nghị
- Laravel 11
- Nodejs v20.18.0
## Các bước chạy Project

**1. Clone project**  
```
git clone git@github.com:selunenashor/ake-book-fe.git
cd ake-book-fe
```
**2. Cài đặt các package cần cho project** 
```
composer install
npm install
```
**3. Tạo file `.env` từ `.env.example`**

Có thể thực hiện thủ công hoặc sử dụng lệnh

**4. Tạo key cho project**
```
php artisan key:generate
```
> [!NOTE]
> Thao tác này sẽ generate một chuỗi 32 kí tự ngẫu nhiên và gán chuỗi đó cho biến `APP_KEY` trong file `.env`.  
Về công dụng cụ thể của `APP_KEY`, có thể tham khảo tại link dưới  
https://viblo.asia/p/app-key-in-laravel-3Q75wOdG5Wb

**5. Tạo database**

> Mặc dù project không sử dụng đến database, nhưng vẫn phải gen database thì mới chạy được @@ Sẽ tìm cách disable sau
```
php artisan migrate
```

**6. Build các file cần thiết bằng Vite**
```
npm run build
```
> [!NOTE]
> Khi chạy bước này sẽ có nhiều **Deprecation Warning** hiện ra, yên tâm là project vẫn chạy ngon (ít nhất là trên máy của tác giả :v)

**7. Khởi chạy project**
```
php artisan serve
```
Lúc này trên Terminal sẽ hiển thị URL của project (mặc định là **127.0.0.1:8000**). Mở Browser và gõ URL là được!

# Route List
|Route|Nội dung|
|---|---|
|/login|Trang login   |
|/|Trang chính|
|/result|Trang kết quả tìm kiếm|
|/book|Thông tin sách chi tiết|
|/author|Thông tin tác giả chi tiết|
|/userInfo|Thông tin cá nhân người dùng|
|/userFavorite|Danh mục người dùng yêu thích|
