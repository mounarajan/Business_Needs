<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add quantity</title>
</head>

<body>
<?php require_once('bar.php'); ?><br />
<h1 align="center">Add Quantity</h1>
<table border="1" style="border:1px solid #000;" align="center"><tr><td>Product Id</td><td>Name of the Product</td><td>Brand Name</td><td>Price</td><td>Quantity</td><td>Updated on</td><td>Add Quantity</td></tr>
<?php
	mysql_select_db('u344762081_prod',mysql_connect('mysql.1freehosting.com','u344762081_moun','hanuman'));
	$con = mysql_query("select * from product");
	while($res = mysql_fetch_array($con))
	{ ?>
		<tr><td><?php echo $res['id']; ?></td><td><?php echo $res['name']; ?></td><td><?php echo $res['brand']; ?></td><td><?php echo $res['price']; ?>&nbsp;Rs</td><td><?php echo $res['quantity']; ?></td><td><?php echo $res['updated_on']; ?></td><td><a href="quantity.php?id=<?php echo $res['id']; ?>"><input type="submit" value="Add"class="button" /></a></td></tr>
	<?php }
?>
</table>
</body>
</html>
