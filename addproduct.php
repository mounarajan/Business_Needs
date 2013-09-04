<?php
mysql_select_db('u344762081_prod',mysql_connect('mysql.1freehosting.com','u344762081_moun','hanuman'));
$con = mysql_query("insert into product (name,brand,price,quantity,updated_on) values ('$_REQUEST[proname]','$_REQUEST[braname]','$_REQUEST[price]','$_REQUEST[qua]',CURDATE())");
if($con)
{
	header('Location:index.php?up=1');
}
else
{
	header('Location:index.php?up=2');
}
?>