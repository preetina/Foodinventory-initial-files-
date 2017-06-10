<?php
include("index.php");
//connecting to the mysql database
$con=mysqli_connect('127.0.0.1','root','');

//Updating the database
mysqli_select_db($con,'foodinventory');

//selecting query
$sql="UPDATE menu SET Name='$_POST[nam]', Price='$_POST[price]' WHERE ID='$_POST[Id]'";

//Executing the query
if (mysqli_query($con,$sql))
	header("refresh:0.5; url=menu_modify.php");
else
	echo "<b>Not Updated!</b>";

?>