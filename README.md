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

## 2. Cách cài đặt
