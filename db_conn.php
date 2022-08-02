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