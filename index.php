<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome home</title>
</head>

<body>
<?php require_once('bar.php'); ?><br />
<h1 align="center">Add New Product</h1>
<form method="post" action="addproduct.php">	
	<table align="center">
    	<tr><td>Product Name</td><td><input type="text" name="proname" required /></td></tr>
        <tr><td>Brand name</td><td><input type="text" name="braname" required /></td></tr>
        <tr><td>Price</td><td><input type="number" name="price" required /></td></tr>
        <tr><td>Quantity</td><td><input type="number" name="qua" required /></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="Submit" class="button" /> </td></tr>
    </table>
</form>
<?php
	if($_REQUEST['up'] == 1)
	{
		echo "Product Added Sucessfully";
	}
	else if ($_REQUEST['up'] == 2)
	{
		echo "Error in Product Adding";
	}
?>
</body>
</html>
