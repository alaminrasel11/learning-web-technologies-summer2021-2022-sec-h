<?php 
	
	//$name = $_REQUEST['name'];
	if(isset($_COOKIE['status']))
	{
		require_once('../controller/rootheader.html');
?>

<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome <?=$name?></h1>  
	<a href="addProduct.php"> Add Product </a> <br> 
	<a href="viewProducts.php"> View Products </a> <br>
	<a href="editProuct.php"> Edit Product </a> <br>
	<a href="deleteProuct.php"> Delete Product </a><br><br>

	<a href="editProfile.php"> Edit Profile </a> <br>
	<a href="contactAdmin.php"> Contact Admin </a> <br>
	<a href="settings.php"> Settings </a><br><br>

	<a href="logout.php"> Log Out </a>
	
</body>
</html>

<?php 
	}else
	{
		echo "invalid request!";
	} 
?>