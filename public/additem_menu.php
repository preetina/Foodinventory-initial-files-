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
    <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px;"><b><u>Admin Panel<br/><p style="font-size: 12px">(Menu Management)</p></u></b></h1>
<br />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="additem_menu.php"><b>Add Item</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="menu_update.php"><b>Update Item</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>

</div>
<br/>
<form action="addinmenu.php" method="post">
<p><b>Add an item here.</b></p>
<br/><input type="text" name="Name" placeholder="Enter the Item name" ><br/><br/>
<br/><input type="text" name="Price" placeholder="Enter the Price" ><br/></br>
<div>
<br/>
<input type="submit" name="submit" value="Add">

</div>
</div>

</form>

</body>
</html>

