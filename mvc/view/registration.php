
<?php
require_once('../controller/rootheader.html');
?>

<html>
<head>
	<title>Seller Registration</title>
</head>
<body>
	<form action="../controller/registrationCheck.php" method="post" enctype="">
		<fieldset>
			<legend>Create Account</legend>
				Name: <input type="text" name="name" value=""/> <br>
				Username: <input type="text" name="username" value=""/> <br>
				Email: <input type="email" name="email" value=""/> <br>
				Password: <input type="password" name="password" value=""/> <br>
				Gender:
  					<input type="radio" name="gender" value="female">Male
 					<input type="radio" name="gender" value="male">Female
  					<input type="radio" name="gender" value="other">Other
  					<br><br>
				<input type="submit" name="submit" value="Submit"/>
				<a href="login.html"> Log In </a>
		</fieldset>
	</form>
</body>
</html>
