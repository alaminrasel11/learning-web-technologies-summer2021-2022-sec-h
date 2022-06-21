<?php 

$id = $_REQUEST['id'];
$password = $_REQUEST['password'];
$confirmpassword = $_REQUEST['confirmpassword'];
$name = $_REQUEST['name'];
$usertype = $_REQUEST['usertype'];
$fname = $_REQUEST['fname'];

if($id == null || $password == null || $confirmpassword == null || $name == null|| $usertype == null)
{
	
	if($password != $confirmpassword)
	{
			echo "Password not match";
	}
	else
		echo "Fill the Form please";
}
else{
		$user = $id."|".$password."|".$confirmpassword."|".$name."|".$usertype."\r\n";
		$file = fopen('userRegistrartion.txt', 'a');
		fwrite($file, $user);
		<h2> Registration done</h2>
		//if($fname == 'Signup'){
		//	header('location: home.php');
		//}else{
			//header('location: login.html');			
		//}

}