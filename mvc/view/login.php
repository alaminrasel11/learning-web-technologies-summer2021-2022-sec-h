<html>
<head>
	<title>Log In</title>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>

	<?php

      require_once('../controller/rootheader.html');

	?>
<div id="frm">	
	<form action="../controller/logincheck.php" method="post" enctype="">
		Username: <input type="text" id="user" name="username" value=""/> <br>
		Password: <input type="password" id="pass" name="password" value=""/> <br>
		<input type="submit" id="btn" name="submit" value="Log In"/>
		<a href="registration2.php"> Register Now </a>
	</form>
<div/>
</body>
</html>