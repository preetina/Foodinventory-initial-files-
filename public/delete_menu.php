<?php
include("index.php");
//connecting to the mysql database
$con=mysqli_connect('127.0.0.1','root','');

//Updating the database
mysqli_select_db($con,'foodinventory');

//selecting query
$sql="DELETE FROM menu WHERE Id='$_GET[id]'";
//Executing the query
if (mysqli_query($con,$sql))
	header("refresh:0.5; url=menu_del.php");
else
	echo "<b>Not Deleted!</b>";

?>