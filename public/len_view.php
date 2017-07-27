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
    <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px;"><b>Kitchen Panel<br/></b></h1>
<br />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="order.php"><b>Place Order</b></a></p>
<hr/>
<p style="font-size: 17px; font-family:Minion Pro Med;"><b>View Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="groc_view.php"><b>1.Fruits & Grocery</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="spices_view.php"><b>2.Spices</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="misc_view.php"><b>3.Miscellaneous</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="bev_view.php"><b>4.Liquid & Beverages</b></a></p>


<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
</div>
<br/>
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>View Stock!</b></p>

<table width="400px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="font-family: Cambria">
<tr style="color:#1A446C"><td colspan="2"><center>Lentils</center></td></tr>
<th style="color:#1A446C"><b>Item</b></th>
<th style="color:#1A446C"><b>Quantity</th>
</tr>

<?php
while($list=mysqli_fetch_assoc($record)){
	echo "<tr>";
	//echo "<td>".$list['SN']."</td>";
		echo "<td>".$list['Item']."</td>";
			echo "<td>".$list['Quantity'].$list['Unit']."</td>";
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


