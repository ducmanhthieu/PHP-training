<?php 
session_start();
include 'conn.php';
 
if (isset($_POST["submit"]))
 {
    $fName = $_FILES["file"]["name"];
    $tmpName = $_FILES["file"]["tmp_name"];
    $path = "files/".$fName;
    $sql = "INSERT into files(name) VALUES('$fName')";
 
    if(mysqli_query($conn,$sql)){
    move_uploaded_file($path,$tmpName);
    header("location:index.php");
    echo "Upload File thành công";
    }
    else{
        echo "Lỗi upload";
    }
}

?>