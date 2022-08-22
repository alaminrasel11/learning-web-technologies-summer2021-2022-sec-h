<?php 
require_once('../model/db.php');
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$conn = getconnection();
	$sql = "select * from registrations where username='{$username}' and password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

    if($count > 0)
    {
		setcookie('status', 'true', time()+600, '/');		
		header('location: ../view/sellerHome.php');
	}
	else
	{
		echo "invalid username/password";
	}
?>