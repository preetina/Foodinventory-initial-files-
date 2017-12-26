<?php
include("index.php");
//connecting to the mysql database
$con=mysqli_connect('127.0.0.1','root','');

//Updating the database
mysqli_select_db($con,'foodinventory');

//selecting query
//print_r($_GET);exit;
$sql="Update `list` set Quantity=Quantity-'$_GET[quantity]' WHERE `Item`='$_GET[item]'" ;
//print_r($sql);exit;
//Executing the query
if (mysqli_query($con,$sql)){
 $sqldel="DELETE FROM `order` WHERE Id='$_GET[id]'"; 
 //print_r($sqldel);exit;
 
 if (mysqli_query($con,$sqldel)){  
    header("refresh:0.5; url=display_order.php");
 }
}

	
else
	echo "<b>Not Deleted!</b>";

?>