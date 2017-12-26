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
<p style="font-size:18px; font-family: Minion Pro Med; color:#EEE4B9;"><b>Stock Management</b></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="demo.php" ><b>Manage Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="up2.php" ><b>View Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="thre.php" ><b>Alert</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="log_search.php" ><b>View Log</b></a></p>
<hr />
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="menupanel.php"><b>Menu Management</b> </a></p>
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="display_order.php"><b>View Orders</b> </a></p>

<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>


	</div>
<form action="search_item.php" method="post">
    <br />
    <br /><br/>
	<p style="text-align:center; font-size:30px; font-family: Calibri ; color:#8D0D19 "><b> Stock Item </b></p>
	<center>
	<input type="text" name="valueToSearch" placeholder="Enter an Item here" >
	<input type="submit" name="search" value="Search">
	
	
   <table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="color:#1A446C"><td colspan="2"><center>Select Your Category!</center></td></tr>
<tr style="color:#1A446C"><td><a href="groc_view.php" >1.Fruits & Grocery</td></tr><br />
<tr style="color:#1A446C"><td><a href="len_view.php" >2.Lentils</td></tr><br />
<tr style="color:#1A446C"><td><a href="spices_view.php" >3.Spices</td></tr><br />
<tr style="color:#1A446C"><td><a href="bev_view.php" >4.Liqiud & Beverages</td></tr><br />
<tr style="color:#1A446C"><td><a href="misc_view.php" >2.Miscellaneous</td></tr><br />
</tr>
</table>
</form>
</div>


</body>
</html>