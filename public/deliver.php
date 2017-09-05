<?php
session_start();
//check if user is logged in.If not redirect to admin page.
if(!isset($_SESSION['admin']))
{
	//header("Location:index.php?page=admin");
}
include("index.php");
include("dbconnect.php");
?>
<html>
<head>
<title>Php insert update and delete</title>
</head>
<body>
<div id="main">
    <div id="navigation">
    <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px;"><b><u>Admin Panel</u></b></h1>

<br />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Add Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="delete_item.php" ><b>Delete Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="view_admin.php" ><b>View Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="thre.php" ><b>Warning</b></a></p>



<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
    
</div>
<br/>
<form action="deli.php" method="post">
<table width=400px" border="5" cellpadding="1" cellspacing="1" align="center">
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>Stock Management</b></p>
<center><p><b>Add an item into stock!</b></p></center>
<tr><th><br/>Item <input type="text" name="Item" placeholder="Enter the Item" ><br/></th></tr>
<tr><th><br/>Quantity <input type="text" name="Quantity" placeholder="Enter the Quantity" ><br/></th></tr>
<tr><th><br/>Unit <select name="Unit" >
<option value="Kg">Kilogram</option>
<option value="Packet">Packet</option>
<option value="Litre">Litre</option>
<option value="Bottle">Bottle</option></th></tr>
<tr><th><br/>Date <input type="text" name="Date" placeholder="Enter the Date"><br/></th></tr>
<tr><th><br/>Category <select name="Category" >
<option value="Miscellaneous">Miscellaneous</option>
<option value="Fruit & Grocery">Fruits & Grocery</option>
<option value="Spices">Spices</option>
<option value="Lentils">Lentils</option>
<option value="Liquid & Beverages">Liquid & Beverages</option></th></tr>

<tr><td colspan="2"><br /><b><center><input type="submit" name="submit" value="Add"></center></b></p></td></tr>


</table>
 
<br/><br/>


</div>

</div>

</form>

</body>
</html>

