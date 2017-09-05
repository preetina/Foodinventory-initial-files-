<?php
include("index.php");
//connecting to the mysql database
$con=mysqli_connect('127.0.0.1','root','');

//Updating the database
mysqli_select_db($con,'foodinventory');

//selecting query
$sql="DELETE FROM list WHERE SN='$_GET[id]'";
//Executing the query
if (mysqli_query($con,$sql))
header("refresh:0.5; url=demo.php");
else
	echo "<b>Not Deleted!</b>";

?>