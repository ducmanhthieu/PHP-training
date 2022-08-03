<?php
    include 'register_login/server.php';
    if( isset($_POST['username'])) {
        $username = $_POST['username'];
        $search = addslashes($_POST['username']);
        $sql = "SELECT * FROM user WHERE username like '%$username%'";
        $query=mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query);
        $check= mysqli_num_rows($query);
        if($check > 0 && $search != "" ){
            echo '<table border="1" cellspacing="0" cellpadding="10">';
            while($data){
                echo '<tr>';
                            echo "<td>{$data['id']}</td>";
                            echo "<td>{$data['username']}</td>";
                            echo "<td>{$data['password']}</td>";
                            echo "<td>{$data['Lop']}</td>";
                        echo '</tr>';
                    }
                    echo '</table>';

            
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tìm kiếm</title>
	<meta charset="utf-8">

</head>
<body>
<form method="post" action="search.php">
		<table>
			<tr>
				<td>Tên </td>
				<td><input type = "text" name = "username"></td>
			</tr>
            <td colspan="2">
            <button type = "submit" name = "submit">Tìm kiếm</button>
            </td>
</body>
</html>
