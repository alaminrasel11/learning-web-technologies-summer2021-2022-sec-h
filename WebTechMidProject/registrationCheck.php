<?php 

$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$gender = $_REQUEST['gender'];
$fname = $_REQUEST['fname'];

if($name == null || $username == null ||$password == null || $email == null || $gender == null)
	{
		echo "Please, fill all the box of Registration form ";
	}
else
	{
		$seller = $name."|".$username."|".$password."|".$email."|".$gender."\r\n";
		$file = fopen('seller.txt', 'a');
		fwrite($file, $seller);
		if($fname == 'Submit'){
			header('location: sellerHome.php');
		}else
			{
				header('location: login.html');			
			}
}
?>