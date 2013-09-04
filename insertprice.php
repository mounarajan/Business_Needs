<?php
mysql_select_db('product',mysql_connect('localhost','root',''));
$con = mysql_query("update product set quantity=quantity-'".$_REQUEST['quan']."' where name='".$_REQUEST['course']."'");
$con1 = mysql_query("update product set quantity=quantity-'".$_REQUEST['quan1']."' where name='".$_REQUEST['course1']."'");
$con2 = mysql_query("update product set quantity=quantity-'".$_REQUEST['quan2']."' where name='".$_REQUEST['course2']."'");
$con3 = mysql_query("update product set quantity=quantity-'".$_REQUEST['quan3']."' where name='".$_REQUEST['course3']."'");
$con4 = mysql_query("update product set quantity=quantity-'".$_REQUEST['quan4']."' where name='".$_REQUEST['course4']."'");
$name = $_REQUEST['course'].",".$_REQUEST['course1'].",".$_REQUEST['course2'].",".$_REQUEST['course3'].",".$_REQUEST['course4'];
$quan = $_REQUEST['quan'].",".$_REQUEST['quan1'].",".$_REQUEST['quan2'].",".$_REQUEST['quan3'].",".$_REQUEST['quan4'];
$price = $_REQUEST['pri'].",".$_REQUEST['pri1'].",".$_REQUEST['pri2'].",".$_REQUEST['pri3'].",".$_REQUEST['pri4'];
if($con && $con1 && $con2 && $con3 && $con4)
{
$con5 = mysql_query("insert into price (name,quantity,price,total_price,updated_on) values ('$name','$quan','$price','$_REQUEST[tot]',CURDATE())");
}
if($con5)
	{
		header('Location:bill.php?up=1');
	}
	else
	{
		header('Location:bill.php?up=2');
	}
?>