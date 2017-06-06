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
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Add Stock</b></a></p>


<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="stock_modify.php" ><b>Update Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="delete_item.php" ><b>Delete Stock</b></a></p>

<p style="font-size:17px; font-family: Minion Pro Med;"><a href="menupanel.php"><b>Menu Management</b> </a></p>
    
</div>
<br/>
<form action="insert_item.php" method="post">
<p><b>Manage your stock here.</b></p>
<br/><input type="text" name="Item" placeholder="Item" ><br/><br/>
<br/><input type="text" name="Quantity" placeholder="Quantity" ><br/></br>
<br/><input type="text" name="Date" placeholder="Date"><br/></br>
<br/><input type="text" name="Rate" placeholder="Rate">

<div>
<br/><br/>
<input type="submit" name="submit" value="Add">

</div>
</div>

</form>

</body>
</html>

