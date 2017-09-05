<?php
include("index.php");
//connecting to the mysql database
$con=mysqli_connect('127.0.0.1','root','');

//Updating the database
mysqli_select_db($con,'foodinventory');

//selecting query
$sql="UPDATE list SET Item='$_POST[item]', Quantity='$_POST[quan]',Date='$_POST[dat]',Rate='$_POST[rat]' WHERE SN='$_POST[sn]'";

//Executing the query
if (mysqli_query($con,$sql))
	header("refresh:1; url=stock_modify.php");
else
	echo "<b>Not Updated!</b>";

?>