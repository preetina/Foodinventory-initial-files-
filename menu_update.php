<?php
include("index.php");
//connecting to the mysql database
$con=mysqli_connect('127.0.0.1','root','');

//Updating the database
mysqli_select_db($con,'foodinventory');

//selecting query
//$sql="UPDATE menu SET Name='$_POST[Name]',Category='$_POST[Category]',Price='$_POST[Price]'";
$sql="UPDATE menu SET Name='$_POST[Name]',Category='$_POST[Category]',Price='$_POST[Price]' WHERE ID='$_POST[Id]'";

//Executing the query
if (mysqli_query($con,$sql))
	header("refresh:0.5; url=update_menu.php");
else
	echo "<b>Not Updated!</b>";

?>