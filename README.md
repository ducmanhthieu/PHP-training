
# PHP Căn Bản

## [Mở đầu](#Modau)

## [Các chức năng đã hoàn thành](#cacchucnang)

[I. Liên kết database](#1)

[II. Chức năng Đăng ký/Đăng nhập cho người dùng](#2)
	
[III. Chức năng tìm kiếm](#3)

[IV. Chức năng comment trong blog](#4)

[V. Chức năng Upload/Download file](#5)

===========================

<a name="Modau"></a>
## I. Mở đầu
Tất cả các chức năng đều được xây dựng bằng ngôn ngữ `PHP`,`HTML`và `CSS`. Các công cụ hỗ trợ gồm `VS Code`, `Xampp`. 

<a name="cacchucnang"></a>
## Các chức năng đã hoàn thành

<a name="1"></a>
## I. Liên kết database
#### Code:
```
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "duc_hpt";

$conn = mysqli_connect($servername,$username,$password,$database) ;

if($conn){
    echo "Kết nối thành công!";
}
else{
    echo "Kết nối thất bại!";
}
```
Đây là bước đầu để bắt đầu các chức năng bên dưới. Nó dùng để kết nối tới CSDL trang web.
Ở đây là dùng để kiểm tra đã kết nối được đến CSDL hay chưa.
#### Kết quả: 
![image](https://user-images.githubusercontent.com/68129667/183417515-509f5412-3865-47c4-8dcd-33d4f6c86048.png)

<a name="2"></a>
## II. Chức năng đăng ký/đăng nhập cho người dùng
#### Màn hình đăng ký:

![image](https://user-images.githubusercontent.com/68129667/183421615-eb87ba37-f47d-4dca-be4e-bacd0e7023d7.png)
-Với chức năng đăng ký, khi người dùng nhập đủ thông tin và nhấn `Đăng ký` thì thông tin về `Tên người dùng` và `Mật khẩu` 
sẽ được thêm vào CSDL của trang web.
![image](https://user-images.githubusercontent.com/68129667/183423298-894abee1-9f89-4510-af5f-0f4d8e37c196.png)
-Đã thêm thông tin về user vào database
![image](https://user-images.githubusercontent.com/68129667/183423500-ebf3b800-541e-436b-8ff6-5a0c2a8b32e3.png)

#### Màn hình đăng nhập:

![image](https://user-images.githubusercontent.com/68129667/183421819-df210fef-5152-4d93-bca1-9a77b10940be.png)


<a name="3"></a>
## III. Chức năng tìm kiếm 

<a name="4"></a>
## IV. Chức năng comment

<a name="5"></a>
## V. Liên kết database
