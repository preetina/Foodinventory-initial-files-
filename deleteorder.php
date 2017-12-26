<?php
include("index.php");
//connecting to the mysql database
$con=mysqli_connect("localhost","root","","foodinventory");

//Updating the database
mysqli_select_db($con,'foodinventory');

//selecting query
$sql="DELETE * FROM order WHERE Id='$_GET[id]'";
//Executing the query
if (mysqli_query($con,$sql))
	header("refresh:0.5; url=display_order.php");
else
	echo "<b>Not Deleted!</b>";

?>