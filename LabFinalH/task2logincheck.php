<?php 

$userid = $_REQUEST['userid'];
$password = $_REQUEST['password'];

if($userid == null || $password == null){
	echo "null username/password...";
}else{
	
	$file = fopen('userRegistration.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("|", $data); 
		if($userid == trim($user[0]) && $password == trim($user[1])) 
		{
			setcookie('status', 'true', time()+3600, '/');		
			if(trim($user[4])=="Admin")
			{
				header('location: task3Admin.php?username='.$user[3]);
			}
			else
				header('location: task3User.php?username='.$user[3]);
		}	
	}

	echo "invalid username/password";
}