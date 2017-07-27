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
<table width=350px" border="4" cellpadding="2" cellspacing="3" align="center">
<center><p><b>Add an item here!</b></p></center>
<tr><th><br/>Item <input type="text" name="Name" placeholder="Enter the Item name" ><br/><br/></th></tr>
<tr><th><br/>Price<input type="text" name="Price" placeholder="Enter the Price" ><br/></br></th></tr>
<tr><td colspan="2"><center><input type="submit" name="submit" value="Add"></center></td></tr>

<div>
<br/>

</div>
</div>
</table>
</form>

</body>
</html>

