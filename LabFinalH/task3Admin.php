<?php 
	$user = $_REQUEST['username'];
	if(isset($_COOKIE['status']))
	{ header('location: task2.html');
	}
?>

<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome </h1> 
	<h1><?=$user?></h1>

	<a href="create.php"> Profile </a> 
	|<a href="create.php"> Change Password </a> 
	<a href="task5viewusers.php"> View Users </a> | 
	<a href="task3logout.php"> Logout </a>
	
</body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>