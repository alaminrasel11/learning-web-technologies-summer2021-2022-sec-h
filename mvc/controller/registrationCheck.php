<?php 
//require_once('../model/db.php');
$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$gender = $_REQUEST['gender'];
//$fname = $_REQUEST['fname'];

 $dbserver = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $dbname = "sellerdb";


$conn = mysqli_connect($dbserver, $dbuser, $dbname, $dbpass );

if($name == null || $username == null ||$password == null || $email == null || $gender == null)
	{
		echo "Please, fill all the box of Registration form ";
	}
else
	{
		$query = "insert into registrations(name, username,password, email, gender) values('$name', '$username', '$password', '$email', '$gender')";
		$run= mysqli_query($conn,$query) or die(mysqli_error());
		if($run)
		{
			echo "Registration successfully Done";
		}
		else
			echo "Form not Submitted";
	}
	if($fname == 'Submit')
		{
			header('location: ../view/sellerHome.php');
		}
		else
			{
				header('location: ../view/login.php');			
			}
?>