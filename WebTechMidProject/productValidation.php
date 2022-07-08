 <?php 

if(!isset($_COOKIE['status']))
	{
		header('location: login.html');
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
		$products = $productName."|".$category."|".$price."|".$quantity."|".$expireDate."\r\n";
		$file = fopen('products.txt', 'a');
		fwrite($file, $products);
		if($fname == "Add")
		{
			header('location: sellerHome.php');
		}
		else
			{
				header('location: login.html');			
			}
}
?>