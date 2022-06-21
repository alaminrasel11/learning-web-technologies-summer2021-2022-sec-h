<html>
<head>
	<title>Signup</title>
</head>
<body>
	<form action="task1validation.php" method="post" enctype="">
		<fieldset>
			<legend>Signup</legend>
				ID: <input type="text" name="id" value=""/> <br>
				Password: <input type="password" name="password" value=""/> <br>
				Confirm Password: <input type="password" name="confirmpassword" value=""/> <br>
				Name: <input type="text" name="name" value=""/> <br>
				User Type:
 				 <input type="radio" name="usertype" value="User">User
 				 <input type="radio" name="usertype" value="Admin">Admin
				<input type="hidden" name="fname" value="Signup"/> <br>
				<input type="submit" name="submit" value="Signup"/>
		</fieldset>
	</form>
</body>
</html>