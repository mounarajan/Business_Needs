<?php require_once('bar.php'); ?><br />
<h1 align="center">Add Quantity</h1>
<?php
	mysql_select_db('u344762081_prod',mysql_connect('mysql.1freehosting.com','u344762081_moun','hanuman'));
	$con = mysql_query("select * from product where id='".$_REQUEST['id']."'");
	while($res = mysql_fetch_array($con))
	{ ?>
    <form method="post" action="upquan.php">
		<table align="center" border="1" style="border:1px solid #000">
        	<tr><td>Product Id</td><td><input type="text" value="<?php echo $res['id']; ?>" name="id" readonly="readonly" /></td></tr>
            <tr><td>Product Name</td><td><input type="text" value="<?php echo $res['name']; ?>" name="name" readonly="readonly" /></td></tr>
            <tr><td>Amount of quantity to add with previous</td><td><input type="number" name="quan"  /></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Add" class="button" /></td></tr>
        </table>
        </form>
	<?php }
	if($_REQUEST['up'] == 1)
	{
		echo "Product Added Sucessfully";
	}
	else if ($_REQUEST['up'] == 2)
	{
		echo "Error in Product Adding";
	}
?>
