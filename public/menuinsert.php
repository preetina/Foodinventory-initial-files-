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
   <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px ;"><b><u><a href="admin.php">Admin Panel</a></u></b></h1>
<p style="font-size:18px; font-family: Minion Pro Med; color:#EEE4B9;"><b>Menu Management</b></p>

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="menuinsert.php"><b>Insert Item</b></a></p>

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="menu_del.php"><b>Delete Item</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="update_menu.php"><b>Update Item</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="menu_view.php"><b>View Menu</b></a></p>
<hr />
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="stockpanel.php"><b>Stock Management</b> </a></p>
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="display_order.php"><b>View Orders</b> </a></p>
<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>


    
</div>
<br/>

<br/>
<form action="menu_insert.php" method="post">
<!-- <p style="text-align:right"><a href="home.php"><input type="Button" value="Logout"></a></p> -->
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>Menu Management</b></p>

<table width=400px" border="5" cellpadding="1" cellspacing="1" align="center">

<center><p style="font-size: 25px;"><b>Insert into menu!</b></p></center>
<tr><th><br/>Item <input type="text" name="Name" placeholder="Enter the Item" required><br/></th></tr>
<tr><th><br/>Price <input type="text" name="Price" placeholder="Enter the Price" required><br/><br/></th></tr>
<tr><th><br/>Category <select name="Category" >
<option value="Snacks">Snacks</option>
<option value="Beverages">Beverages</option>
<option value="Breakfast">Breakfast</option>
<tr><td colspan="2"><br /><b><center><input type="submit" name="submit" value="Add"></center></b></p></td>
</tr>


</table>

<br/><br/>


</div>
</div>

</form>

</body>
</html>

