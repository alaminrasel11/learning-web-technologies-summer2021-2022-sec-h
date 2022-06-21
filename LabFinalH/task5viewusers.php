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
	<title>user List</title>
</head>
<body>
		<h2>user list</h2>
		<a href="task3Admin.php"> Back </a> | 
		<a href="task3logout.php"> logout </a>
		<br>

	<?php

		header("Content-type: text/html");

		$file = fopen("userRegistration.txt","r");

	?>

	<table border="2px" cellpadding="2px" cellspacing="4px">

	<tr>

	<th>ID</th>

	<th>Name</th>

	<th>User Type</th>

	</tr>

	<?php

		while(($row = fgets($file)) != false)
		{

		$col = explode('|',$row);

		foreach($col as $data)
			{

				echo "<td>". trim($data)."</td>";

			}

		}

?>

</table>
</body>
</html>