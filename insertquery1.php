<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<form method ="POST">
	name:<input type="text" name="uname"><br>
	roll_no:<input type="number" name="roll_no"><br>
	email:<input type="email" name="uemail"><br>
	branch:<select name="branches">
		<option value="ECE">ECE</option>
		<option value="CME">CME</option>
		<option value="MECH">MECH</option>
		<option value="EEE">EEE</option>
	</select><br>
	mobile:<input type="number" name="phone">
	<button name="submit">submit</button>
<body>
	<?php
	// $servername = "localhost";
	// $username = "root";
	// $password ="";
	// $dbname = "codemind";
	// $connection= mysqli_connect($servername,$username,$password,$dbname);
	$connection=mysqli_connect("localhost","root","","codemind");
	if (isset($_POST['submit'])){
		$username=$_POST['uname'];
		$roll_number=$_POST['roll_no'];
		$email_id=$_POST['uemail'];
		$branch=$_POST['branches'];
		$phone_no=$_POST['phone'];

		$select = "SELECT * FROM users WHERE E_MAIL='$email_id'";
		$result1=mysqli_query($connection,$select);
		if(mysqli_num_rows($result1)>0) {
			echo "<script>alert('Already registered')</script>";
		}


		// method 1
		// $insert="INSERT INTO users SET Name='$username',PIN_NO='$roll_number',E_MAIL='$email_id',BRANCH='$branch'";

		//method 2

		else{
		$insert="INSERT INTO users(Name,PIN_NO,E_MAIL,BRANCH,MOBILE_NO)
		VALUES('$username','$roll_number','$email_id','$branch')";
		$result=mysqli_query($connection,$insert);
		if($result){
			echo "<script>alert('data inserted successfully')</script>";
		}
		else{
			echo "<script>alert('data not inserted ')</script>";
		}
	}
}
	?>
</body>
</html>

