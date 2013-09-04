<?php require_once('bar.php'); ?><br />
<h1 align="center">Product Shell Details</h1>
<table align="center" border="1" style="border:1px solid #000;"><tr><td>Name of the Product</td><td>Quantities</td><td>Price</td><td>Total Price</td><td>Updated On</td></tr>
<?php
	mysql_select_db('u344762081_prod',mysql_connect('mysql.1freehosting.com','u344762081_moun','hanuman'));
	$con = mysql_query("select * from price");
	while($res = mysql_fetch_array($con))
	{ ?>
    <tr><td><?php echo $res['name']; ?></td><td><?php echo $res['quantity']; ?></td><td><?php echo $res['price']; ?></td><td><?php echo $res['total_price']; ?></td><td><?php echo $res['updated_on']; ?></td></tr>
		
<?php	}
?>
</table>