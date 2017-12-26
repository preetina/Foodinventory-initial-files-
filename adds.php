<?php

include("insert.php");
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "Not connected to the server";
}
if (!mysqli_select_db($con,'foodinventory'))
{
	echo "Database not selected.";

}
if (isset($_POST['Add'])){
$Item=$_POST['Item'];
$Quantity=$_POST['Quantity'];
$Rate=$_POST['Rate'];
$Date=$_POST['Date'];
}
$sql= "INSERT into list(Item,Quantity,Rate,Date) VALUES ('$Item','$Quantity','$Rate','$Date')";

if(mysqli_query($con,$sql))
{

	echo "Data inserted successfully!";
}
header("refresh:2;url=insert.php");
?>