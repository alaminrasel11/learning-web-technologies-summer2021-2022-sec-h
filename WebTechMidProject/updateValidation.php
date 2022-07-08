<?php 
require('header.php');

$name = $_REQUEST['name'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$fname = $_REQUEST['fname'];

if($name == null ||$password == null || $email == null)
	{
		echo "Please, fill all the box of Update form ";
	}
else
	{
		$seller = $name."|".$password."|".$email."\r\n";
		$file = fopen('seller.txt', 'a');
		fwrite($file, $seller);
		if($fname == 'Update'){
			header('location: sellerHome.php');
		}else
			{
				header('location: login.html');			
			}
}
?>