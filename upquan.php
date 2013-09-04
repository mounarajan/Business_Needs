<?php
	mysql_select_db('u344762081_prod',mysql_connect('mysql.1freehosting.com','u344762081_moun','hanuman'));
	$con = mysql_query("update product set quantity=quantity+".$_REQUEST['quan']." where id='".$_REQUEST['id']."'");
	if($con)
	{
		header('Location:quantity.php?up=1&id='.$_REQUEST['id']);
	}
	else
	{
		header('Location:quantity.php?up=2&id='.$_REQUEST['id']);
	}

?>