<?php 

$email = $_REQUEST['email'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL) )
	{
		echo "Inalid email";
	}
else
	{
	
		echo "Valid email";
	}


?>