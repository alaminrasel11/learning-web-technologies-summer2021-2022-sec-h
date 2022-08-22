 <?php 

if(!isset($_COOKIE['status']))
	{
		header('location: ../view/login.html');
	}

$productName = $_REQUEST['productName'];
$category = $_REQUEST['category'];
$price = $_REQUEST['price'];
$quantity = $_REQUEST['quantity'];
$expireDate = $_REQUEST['expireDate'];
$fname = $_REQUEST['fname'];

if($productName == null || $category == null ||$price == null || $quantity == null)
	{
		echo "Please, fill information of product ";
	}
else
	{
		$dbserver = "localhost";
   		$dbuser = "root";
   		$dbpass = "";
   		$dbname = "sellerdb";


		$conn = mysqli_connect($dbserver, $dbuser, $dbname);
		$query = "insert into products(productName, category,price, quantity, expireDate) values('$productName', '$category', '$price', '$quantity', '$expireDate')";
		$run= mysqli_query($conn,$query) or die(mysqli_error());
		if($run)
		{
			echo "Product added successfully";
		}
		else
			echo "Prouct not added";

	}

		if($fname == "Add")
		{
			header('location: ../view/sellerHome.php');
		}
		else
			{
				header('location: ../view/login.html');			
			}
?>