
<?php 
	$username = $_REQUEST['username'];
	if(isset($_COOKIE['status']))
	{ 
		header('location: task2.html');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
</head>
<body>
		<h2>Profile</h2>
		<a href="task2.php"> Go home </a> | 
		<a href="task3logout.php"> logout </a>
		<br>

		<table border="1">
			<tr>
				<td>Username</td>
				<td>Password</td>
				<td>Email</td>
				<td>Action</td>
			</tr>
			<tr>
				<td>abc</td>
				<td>123</td>
				<td>abc@aiub.edu</td>
				<td>
					<a href="edit.php"> Edit </a> | 	
					<a href="delete.php"> Delete </a> 
				</td>
			</tr>
		</table>
</body>
</html>