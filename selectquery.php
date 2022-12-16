<!DOCTYPE html>

<?php
include('db_connection.php')
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Select query</title>
</head>
<body>
	<table border="">
		<thead>
			<th>S.NO</th>
			<th>Name</th>
			<th>PIN_NO</th>
			<th>BRANCH</th>
			<th>MOBILE_NO</th>
			<th>E_MAIL</th>
		</thead>
		<tbody>
			<?php
			// $connection=mysqli_connect("localhost","root","","codemind");
			$select= "SELECT * FROM users";
			$result= mysqli_query($connection,$select);
			while($fetch=mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $fetch['S.NO']?></td>
					<td><?php echo $fetch['Name']?></td>
					<td><?php echo $fetch['PIN_NO']?></td>
					<td><?php echo $fetch['BRANCH']?></td>
					<td><?php echo $fetch['MOBILE_NO']?></td>
					<td><?php echo $fetch['E_MAIL']?></td>
				</tr>
				<?php
			} 
			?>
		</tbody>
	</table>

</body>
</html>