<?php 

$gender = $_REQUEST['gender'];

if($gender == null)
	{
		echo "Please Select Gender";
	}
else
	{
	
		echo $gender;
	}


?>