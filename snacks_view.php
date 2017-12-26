<?php
include ("index.php");

$sql="select * From menu where Category='Snacks' ORDER BY Id desc";
$rec=mysqli_query($dbconnect,$sql);
?>
<html>
<head>
<title>Display records</title>
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
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b> Menu Management </b></p>
<p style="text-align:center; font-size:18px;"><b>View Menu!</b></p>

<table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="font-family: Cambria">
<tr style="color:#1A446C"><td colspan="4"><center>Snacks</center></td></tr>
<th style="color:#1A446C"><b>Item</b></th>

<th style="color:#1A446C"><b>Price</th>

</tr>

<?php
while($list=mysqli_fetch_assoc($rec)){
	echo "<tr>";
	//echo "<td>".$list['SN']."</td>";
		echo "<td>".$list['Name']."</td>";
        //echo "<td>".$list['Category']."</td>";
		
            echo "<td>".$list['Price']."</td>";
         
echo "</tr>";
}
//end while
?>
</table>


<div>
<br/>

</div>
</div>

</body>
</html>



