<?php 
	$username = $_REQUEST['username'];
	if(isset($_COOKIE['status']))
	{
		header('location: task2.html');
	}
?>

<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome </h1> 
	<h1><?=$username?></h1>

	<a href="task4profile.php?username=<?php echo $username ?>"> Profile </a> 
	<a href="task6changepassword.php?username=<?php echo $username ?>"> Change Password </a> 
	<a href="task3logout.php"> Logout </a>
	
</body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>