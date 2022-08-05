<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form action = 'upload.php' method="post" enctype="multipart/form-data">
    <label>File Upload</label>
    <input type="File" name="file">
    <button type="submit" name="submit"> Upload</button>
    <?php       
        include 'conn.php';

               $sql = "SELECT * FROM files";
               $query = mysqli_query($conn,$sql);
               
               while($data = mysqli_fetch_assoc($query)){
                   ?>
                   <br>
               <a href="download.php?file=<?php echo $data['name'] ?>">Download</a>
               <?php
               }
               ?>
</form> 
 
</body>
</html>