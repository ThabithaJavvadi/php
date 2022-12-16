<?php
	 $servername = "localhost";
	 $username = "root";
	 $password ="";
	 $dbname = "codemind";
	 $conn= new  mysqli($servername, $username, $password, $dbname);

	// $connection=mysqli_connect("localhost","root","","codemind");

	if ($conn->connect_error) {
		die("connection failed:". $conn->connect_error);
	}
	else{
		echo " connected";
	}
	?>
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DataDisplay</title>
</head>
<body>
	<center>
		<h1>Student Information</h1>
	</center>
	<table border="">
		<thead>
		<th>s.no</th>
		<th>username</th>
		<th>email</th>
		<th>courses</th>
		<th>colleges</th>
	</thead>
	<tbody>
		<?php
		$sql = "SELECT * FROM student_details";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($result))
		{
			?>
			<tr>
				<td><?php echo $row['s.no']?></td>
				<td><?php echo $row['username']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['courses']?></td>
				<td><?php echo $row['colleges']?></td>
			</tr>
			<?php
		}
		?>
	</tbody>
	</table>


</body>
</html>