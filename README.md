<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Ôn thi Cuối kỳ Công nghệ Web

Đây là dự án ôn thi cuối kỳ môn Công Nghệ Web.

- Dự án này một dạng để ôn tập, không phải đề thi chính thức

## 1. Yêu cầu đề bài

Xây dựng một ứng dụng quản lý sinh viên bằng Laravel

Sử dụng *migration* để tạo 2 bảng:

### classes

| Tên cột | Kiểu dữ liệu | Ý nghĩa |
| :--- | :--- | :--- |
| id | INT, Primary Key | Mã định danh lớp học |
| class_name | VARCHAR(255) | Tên lớp |
| program | VARCHAR(255) | Ngành học |
| start_date | DATE | Ngày bắt đầu |
| end_date | DATE | Ngày kết túc |

### students

| Tên cột | Kiểu dữ liệu | Ý nghĩa |
| :--- | :--- | :--- |
| id | INT, Primary Key | Mã định danhdanh sinh viên |
| first_name | VARCHAR(50) | Tên sinh viên |
| last_name | VARCHAR(50) | Họ sinh viên |
| email | VARCHAR(100) | Địa chỉ Email |
| student_number | VARCHAR(20) | Mã sinh viên |
| class_id | INT | Khóa ngoại đến classes |
| status | ENUM('Trial', 'Enrolled', 'Dropped') | Trạng thái |
| date_of_birth | DATE | Ngày tháng năm sinh |

Sử dụng Seeder để sinh dữ liệu minh họa với Faker (50 bản ghi)

Ứng dụng hiển thị có phân trang: Student ID, FullName, ClassName, Email, Date Of Birth, Status

Đầy đủ chức năng CRUD

---

## 2. Cách cài đặt

Trước tiên, bạn cần clone repository từ GitHub:

```bash
git clone https://github.com/quangdungn/cnweb.git
```

Sau đó, di chuyển vào thư mục dự án:
```bash
cd cnweb
```

---
Cài đặt Composer.
```bash
composer install
```

---
Copy file mẫu `.env.example` thành `.env`:
```bash
cp .env.example .env
```

Mở file `.env` và cấu hình các thông tin như:
  ```php
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=laravel_db
  DB_USERNAME=root
  DB_PASSWORD=your_password
```
---
Chạy migration để tạo bảng:
```bash
php artisan migrate
```

Chạy seeder để sinh dữ liệu:
```bash
php artisan db:seed --class ClassesTableSeeder
php artisan db:seed --class StudentsTableSeeder
```

---
Khởi động server Laravel:
```bash
php artisan serve
```
Mở trình duyệt và truy cập vào [http://localhost:8000](http://localhost:8000).
