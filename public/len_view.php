<?php
include ("index.php");

$sql= "select * From list where Category='Lentils'";
$record=mysqli_query($dbconnect,$sql);
?>
<html>
<head>
<title>Display records</title>
</head>
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
<br/>
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>View Stock</b></p>

<table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="font-family: Cambria">
<tr style="color:#1A446C"><td colspan="4"><center>Lentils</center></td></tr>
<th style="color:#1A446C"><b>Item</b></th>
<th style="color:#1A446C"><b>Quantity</th>
<th style="color:#1A446C"><b>Date</th>
<th style="color:#1A446C"><b>Rate</th>
</tr>

<?php
while($list=mysqli_fetch_assoc($record)){
	echo "<tr>";
	//echo "<td>".$list['SN']."</td>";
		echo "<td>".$list['Item']."</td>";
			echo "<td>".$list['Quantity'].$list['Unit']."</td>";
            echo "<td>".$list['Date']."</td>";
                echo "<td>".$list['Rate']."</td>";
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


