<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Task on Login</title>
</head>
<body>
	<form method ="POST">
		UserID:<input type="text" name="uname"><br><br>
		Password:<input type="password" name="upassword"><br><br>
		<button name="submit">submit</button>
      </form>

	<?php
	// $servername = "localhost";
	// $username = "root";
	// $password ="";
	// $dbname = "codemind";
	// $connection= mysqli_connect($servername,$username,$password,$dbname);
	$connection=mysqli_connect("localhost","root","","codemind");
    if (isset($_POST['submit'])){
        $username=$_POST['uname'];
        $password=$_POST['upassword'];
    }

	?>
</body>
</html>