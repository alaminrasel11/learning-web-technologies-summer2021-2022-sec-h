<?php 
	
	require_once('rootheader.html');
	$name = $_REQUEST['name'];
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
<head>
	<title>Add Product</title>
</head>
<body>

	<form action="productValidation.php" method="post" enctype="">
		<fieldset>
			<legend> Add Product </legend>
				Product Name: <input type="text" name="productName" value=""/> <br>
				Category: <input type="text" name="category" value=""/> <br>
				Price: <input type="number" name="price" value=""/> <br>
				Quantity: <input type="number" name="quantity" value=""/> <br>
				<input type="date" name="expireDate" value=" "/> <br> <br>
				<input type="submit" name="submit" value="Add"/>
		</fieldset>
	</form>

	<a href="sellerHome.php?name=".$name."\"> Back   </a>   | 
	<a href="logout.php"> Log Out </a>
</body>
</html>