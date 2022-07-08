<?php
require('header.php');
require('rootheader.html');

?>

<html>
<head>
	<title>Update Profile</title>
</head>
<body>
	<form action="updateValidation.php" method="post" enctype="">
		<fieldset>
			<legend>Update Information</legend>
				Name: <input type="text" name="name" value=""/> <br>
				Email: <input type="email" name="email" value=""/> <br>
				Password: <input type="password" name="password" value=""/> <br><br>
				<input type="submit" name="submit" value="Update"/>
		</fieldset>
	</form>
</body>
</html>
