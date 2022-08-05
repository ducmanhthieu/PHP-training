<?php
$filename = basename($_GET['file']);
$file_path = "files/".$filename;
header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"".$filename."\""); 
echo readfile($file_path);
?>