<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Bill</title>
<script type="text/javascript" src="jquery.js"></script>
<script type='text/javascript' src='jquery.autocomplete.js'></script>
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />

<script type="text/javascript">
$().ready(function() {
	$("#course").autocomplete("get_course_list.php", {
		width: 260,
		matchContains: true,
		selectFirst: false
	});
});
$().ready(function() {
	$("#course1").autocomplete("get_course_list.php", {
		width: 260,
		matchContains: true,
		selectFirst: false
	});
});
$().ready(function() {
	$("#course2").autocomplete("get_course_list.php", {
		width: 260,
		matchContains: true,
		selectFirst: false
	});
});

$().ready(function() {
	$("#course3").autocomplete("get_course_list.php", {
		width: 260,
		matchContains: true,
		selectFirst: false
	});
});

$().ready(function() {
	$("#course4").autocomplete("get_course_list.php", {
		width: 260,
		matchContains: true,
		selectFirst: false
	});
});

function myFunction()
{
	if(document.getElementById("course").value == '' )
	{
		document.getElementById("pri").value = '';
		document.getElementById("quan").value = '';
	}
	else if(document.getElementById("course").value != '' && document.getElementById("quan").value == ''  )
	{
		document.getElementById("quan").value = 1;
	}
	if(document.getElementById("course1").value == '' )
	{
		document.getElementById("pri1").value = '';
		document.getElementById("quan1").value = '';
	}
	else if(document.getElementById("course1").value != '' && document.getElementById("quan1").value == ''  )
	{
		document.getElementById("quan1").value = 1;
	}
	if(document.getElementById("course2").value == '' )
	{
		document.getElementById("pri2").value = '';
		document.getElementById("quan2").value = '';
	}
	else if(document.getElementById("course2").value != '' && document.getElementById("quan2").value == ''  )
	{
		document.getElementById("quan2").value = 1;
	}
	if(document.getElementById("course3").value == '' )
	{
		document.getElementById("pri3").value = '';
		document.getElementById("quan3").value = '';
	}
	else if(document.getElementById("course3").value != '' && document.getElementById("quan3").value == ''  )
	{
		document.getElementById("quan3").value = 1;
	}
	if(document.getElementById("course4").value == '' )
	{
		document.getElementById("pri4").value = '';
		document.getElementById("quan4").value = '';
	}
	else if(document.getElementById("course4").value != '' && document.getElementById("quan4").value == ''  )
	{
		document.getElementById("quan4").value = 1;
	}
	var pri = Number(document.getElementById("pri").value);
    var pri1 = Number(document.getElementById("pri1").value);
	var pri2 = Number(document.getElementById("pri2").value);
	var pri3 = Number(document.getElementById("pri3").value);
	var pri4 = Number(document.getElementById("pri4").value);

    var total = pri + pri1 + pri2 + pri3 + pri4;
	document.getElementById("tot").value = total;
}
</script>
</head>
<body>
<?php require_once('bar.php'); ?><br />
<h1 align="center">Bill Entry</h1>
<form action="insertprice.php" method="post"> 
<table align="center"><tr><td>Product Name <label>:</label></td><td> Quantity <label>:</label></td><td>Price <label>:</label></td></tr>
			<tr><td><input type="text" name="course" id="course" required /></td><td><input type="number" name="quan" id="quan" required /></td><td><input type="number" name="pri" id="pri" required /></td></tr>
            <tr><td><input type="text" name="course1" id="course1" /></td><td><input type="number" name="quan1" id="quan1" /></td><td><input type="number" name="pri1" id="pri1" /></td></tr>
            <tr><td><input type="text" name="course2" id="course2" /></td><td><input type="number" name="quan2" id="quan2" /></td><td><input type="number" name="pri2" id="pri2" /></td></tr>
            <tr><td><input type="text" name="course3" id="course3" /></td><td><input type="number" name="quan3" id="quan3" /></td><td><input type="number" name="pri3" id="pri3" /></td></tr>
            <tr><td><input type="text" name="course4" id="course4" /></td><td><input type="number" name="quan4" id="quan4" /></td><td><input type="number" name="pri4" id="pri4" /></td></tr>
            <tr><td></td><td>Total Price</td><td><input type="number" name="tot" id="tot" /></td><td><a style="cursor:pointer;"" onclick="myFunction()">Calculate</a>
</td></tr>
		<tr><td align="center" colspan="2"><input type="submit" value="Submit" class="button" /></td></tr>
</table>
</form>
</div>
<?php 
if($_REQUEST['up'] == 1)
	{
		echo "Price Added Sucessfully";
	}
	else if ($_REQUEST['up'] == 2)
	{
		echo "Error in Price Adding";
	}
    ?>
</body>
</html>
