<?php 

$username = $_REQUEST['username'];

if($username != null && str_word_count($username)>=2 && preg_match("/^[A-Za-z\\-]*$/", $username)==TRUE && preg_match('/^[a-zA-Z]$/', $username)==TRUE )
	{
		echo "Valid Username";
	}
else
	{
	
		echo "Invalid Username";
	}


?>