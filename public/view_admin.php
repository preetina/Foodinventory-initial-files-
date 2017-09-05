<html>
<?php include("index.php");
?>

<head><title>Kitchenpanel</title>
<link href="stylesheets/basic1.css" media="all" rel="stylesheet" type="text/css"/></head>
<body>
<div id="main">
    <div id="navigation">

<h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px;"><b><u>Admin Panel</u></b></h1>
   <p style="font-size:18px; font-family: Minion Pro Med; color:#EEE4B9;"><b>Stock Management</b></p>

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Edit Stock</b></a></p>
<p style="text-align: left; font-family:Minion Pro Med; font-size: 17px"><a href="delete_item.php" ><b>Delete Stock</b></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="view_admin.php" ><b>View Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="thre.php" ><b>Alert</b></a></p>
<hr />
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="menupanel.php"><b>Menu Management</b> </a></p>
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="display_order.php"><b>View Orders</b> </a></p>
<hr />

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>

</div>

<br/>
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b> Stock Management </b></p>
<p style="text-align:center; font-size:18px;"><b>View Stock!</b></p>

<table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="color:#1A446C"><td colspan="2"><center>Select Your Category!</center></td></tr>
<tr style="color:#1A446C"><td><a href="groc_view.php" >1.Fruits & Grocery</td></tr><br />
<tr style="color:#1A446C"><td><a href="len_view.php" >2.Lentils</td></tr><br />
<tr style="color:#1A446C"><td><a href="spices_view.php" >3.Spices</td></tr>
<tr style="color:#1A446C"><td><a href="misc_view.php" >4.Miscellaneous</td></tr>
<tr style="color:#1A446C"><td><a href="bev_view.php" >5.Liquid & Beverages</td></tr>
</tr>
</table>
<table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="color:#1A446C"><td><a href="up.php" >Search Item</td></tr><br />
</table>
</div>
</body>
</html>
