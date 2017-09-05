<html>
<head><title>Updating the record in database</title></head>
<body>
<?php
include("index.php");
//connecting to the mysql database
$con=mysqli_connect('127.0.0.1','root','');

//selecting the database
mysqli_select_db($con,'foodinventory');

//selecting query
$sql="SElECT * FROM list";

//Executing the query

$records=mysqli_query($con,$sql);
?>
<div id="main">
    <div id="navigation">
   <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px ;"><b><u><a href="admin.php">Admin Panel</a></u></b></h1>
<p style="font-size:18px; font-family: Minion Pro Med; color:#EEE4B9;"><b>Stock Management</b></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Edit Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="delete_item.php" ><b>Delete Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="up2.php" ><b>View Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="thre.php" ><b>Alert</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="log_search.php" ><b>View Log</b></a></p>
<hr />
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="menupanel.php"><b>Menu Management</b> </a></p>
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="display_order.php"><b>View Orders</b> </a></p>
<hr />

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
    </div>
     
<br/>
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>Stock Management</b></p>
<p style="text-align:center; font-size:18px;"><b>Delete Stock!</b></p>
<table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="color:#1A446C"><td colspan="2"><center>Select Your Category!</center></td></tr>
<tr style="color:#1A446C"><td><a href="Groc.php" >1.Fruits & Grocery</td></tr><br />
<tr style="color:#1A446C"><td><a href="Lentils.php" >2.Lentils</td></tr><br />
<tr style="color:#1A446C"><td><a href="Spices.php" >3.Spices</td></tr>
<tr style="color:#1A446C"><td><a href="Miscellaneous.php" >4.Miscellaneous</td></tr>
<tr style="color:#1A446C"><td><a href="Bev.php" >5.Liquid & Beverages</td></tr>
</tr>
</table>

<div>
<br/>


</div>
</div>
<br/>

<br/>


</body>
</html>
