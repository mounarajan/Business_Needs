<?php
	mysql_select_db('u344762081_prod',mysql_connect('mysql.1freehosting.com','u344762081_moun','hanuman'));
$q = $_GET["q"];

if (!$q) return;

$sql = "select DISTINCT price as price from product where price LIKE '%$q%'";
$rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['price'];
	echo "$cname\n";
}
?>