
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

<a name="3"></a>
## III. Chức năng tìm kiếm 

<a name="4"></a>
## IV. Chức năng comment

<a name="5"></a>
## V. Liên kết database
