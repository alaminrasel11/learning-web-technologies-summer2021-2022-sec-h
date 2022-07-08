<?php 

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($username == null || $password == null)
	{
		echo "Please, give your username and password";
	}
	else
		{
	
			$file = fopen('seller.txt', 'r');
	
			while (!feof($file)) 
				{
					$data = fgets($file);
					$user = explode("|", $data); 
					if($username == trim($user[1]) && $password == trim($user[2])) 
						{
							setcookie('status', 'true', time()+600, '/');		
							header('location: sellerHome.php?name='.$user[0]);
						}	
				}

			echo "invalid username/password";
		}
?>