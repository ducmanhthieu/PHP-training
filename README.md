
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

#### Code thực hiện:
```
if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != ''){
                $username = $_POST["username"];
                $password = $_POST["password"];
                $repassword = $_POST["repassword"];
                $Lop = 0;
                if($password != $repassword){
                    header("location:register.php");
                }
                $sql = "SELECT * FROM user WHERE username = '$username'";
                $old = mysqli_query($conn,$sql);
                $password = md5($password);
                if(mysqli_num_rows($old) >0){
                    header("location:register.php");
                }
        
                $sql = "INSERT INTO `user`(`username`, `password`, `Lop`) VALUES ('$username','$password','$Lop')";
                $query=mysqli_query($conn,$sql);
                if($query){
                    header("location:login.php");
                }
```

#### Màn hình đăng nhập:

![image](https://user-images.githubusercontent.com/68129667/183421819-df210fef-5152-4d93-bca1-9a77b10940be.png)

- Đây là chức năng kiểm tra người dùng khi đã có thông tin trong CSDL. Khi user đăng nhập đúng,cần tạo các biến session để ghi nhận họ đã đăng nhập thành công và tiến hành quản lý phiên đăng nhập của người dùng.

#### Code thực hiện: 
```
if( isset($_POST['username'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

                $sql = "SELECT * FROM user WHERE username ='$username'";
                $query=mysqli_query($conn,$sql);
                $data = mysqli_fetch_assoc($query);
                $check= mysqli_num_rows($query);
                if($check == 1){
                    $password = md5($password);
                    if($password==$data['password']){
                        $_SESSION['user'] = $data;
                        header("location:search.php");
                        
                    }else{
                        echo "Mật khẩu không chính xác";
                    }

                }else{
                    echo "Tên người dùng không chính xác";
                }
                
            }
```

<a name="3"></a>
## III. Chức năng tìm kiếm 
-Chức năng tìm kiếm cho phép người dùng có thể tìm thấy thông tin trong CSDL bằng từ khóa. Cụ thể ở đây là thông tin người dùng khi nhập tên
![image](https://user-images.githubusercontent.com/68129667/183434573-7f5ba03c-08e2-4dff-99b4-09bbbe008ba8.png)

#### Kết quả:
![image](https://user-images.githubusercontent.com/68129667/183432151-4c26d9ec-48f4-4b68-9f85-c6a3d4b60257.png)

<a name="4"></a>
## IV. Chức năng comment
-Đây là chức năng cho phép mọi người comment vào trang web. Thông tin của người comment bao gồm `Name`, `Email` và cả `Comment` sẽ được thêm vào CSDL 
#### Màn hình comment:
![image](https://user-images.githubusercontent.com/68129667/183437427-767b2ae2-2c5a-4062-bca3-4a94675d5388.png)

#### CSDL: 
![image](https://user-images.githubusercontent.com/68129667/183438216-baf8e1b4-7289-418f-85fb-560c1f6cfb42.png)

<a name="5"></a>
## V. Chức năng upload/Download file
#### Upload:
![image](https://user-images.githubusercontent.com/68129667/183440083-51767711-adc2-443d-9da3-bbb48c573c45.png)

-Sau khi chọn file cần upload, file sẽ được thêm vào CSDL của trang web và lưu trữ tại đây!
![image](https://user-images.githubusercontent.com/68129667/183440625-dd3cf2b1-c449-41c4-aafd-b7dec8ae6f25.png)

#### Download:
- Thôn tin của từng file upload đã có ở dưới, nhấn chọn 1 file để tải về máy!


