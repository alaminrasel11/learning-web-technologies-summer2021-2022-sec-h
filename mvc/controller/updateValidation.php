<?php 
require('header.php');

$username = $_REQUEST['username'];
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
		
		$dbserver = "localhost";
   		$dbuser = "root";
   		$dbpass = "";
   		$dbname = "sellerdb";


		$conn = mysqli_connect($dbserver, $dbuser, $dbname);
		$query = "update registrations set name='$name', password='$password', email='$email' where username='$username' ";
		$run= mysqli_query($conn,$query) or die(mysqli_error());
		if($run)
		{
			echo "Product added successfully";
		}
		else
			echo "Prouct not added";

		if($fname == 'Update'){
			header('location: sellerHome.php');
		}else
			{
				header('location: login.html');			
			}
}
?>