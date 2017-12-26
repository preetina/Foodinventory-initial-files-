<?php
include("index.php");

?>

<html>
<head>
<title>Filter</title></head>
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
	
	<form action="search_menu.php" method="post">
			<br />
			<br /><br/>
			<p style="text-align:center; font-size:30px; font-family: Calibri ; color:#8D0D19 "><b> Menu Search </b></p>
			<center>
		<input type="text" name="valueToSearch" placeholder="Enter an Menu name" >
		<input type="submit" name="search" value="Search">
        
         <table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="color:#1A446C"><td colspan="2"><center>Select Your Category!</center></td></tr>
<tr style="color:#1A446C"><td><a href="snacks_view.php" >1.Snacks</td></tr><br />
<tr style="color:#1A446C"><td><a href="beverage_view.php" >2.Beverages</td></tr><br />

</tr>
</table>
	
	
	
   
</form>
	
</div>

</body>
</html>
