<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data base Connection</title>
</head>
<body>
	<?php
	// $servername = "localhost";
	// $username = "root";
	// $password ="";
	// $dbname = "codemind";
	// $connection= mysqli_connect($servername,$username,$password,$dbname);

	$connection=mysqli_connect("localhost","root","","codemind");

	if($connection){
		echo "Database connected";
	}
	else{
		echo "not connected";
	}
	?>
</body>
</html>

<!-- <?php
	 $connection=mysqli_connect("localhost","root","","codemind");
	 if (isset($_POST['submit'])){
		$Name=$_POST['username'];
		$Pin_NO=$_POST['number'];
		$college=$_POST['colleges'];
		$Branch=$_POST['branch'];
		$Phone_number=$_POST['telephone'];
		$Gender=$_POST['gender'];
		$D_O_B=$_POST['birth'];
		$Email=$_POST['email'];
		$Address=$_POST['address'];

		//method 2
		$insert="INSERT INTO users(Name,PIN_NO,E_MAIL,BRANCH,MOBILE_NO)
		VALUES('$username','$roll_number','$email_id','$branch','$phone_no')";
		// $result=mysqli_query($connection,$insert);
		if($result=mysqli_query($connection,$insert)){
			echo "<script>alert('data inserted successfully')</script>";
		}
		else{
			echo "<script>alert('data not inserted ')</script>";
		}
	}
	?> -->