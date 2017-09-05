<?php
include ("index.php");

$sql= "SELECT COUNT(*) AS `Rows`, `Date` FROM `order` GROUP BY `Date` ORDER BY `Date` desc" ;
$record=mysqli_query($dbconnect,$sql);
?>
<head>
<title>Display records</title>
</head>
<body>
 <div id="main">
    <div id="navigation">
    <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px ;"><b><u>AdminPanel</u></b></h1>

<br />

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Edit Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="delete_item.php" ><b>Delete Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="view_admin.php" ><b>View Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="thre.php" ><b>Alert</b></a></p>
<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
</div>
<br/>
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>View Orders</b></p>
<table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="font-family: Cambria">
<tr style="color:#1A446C"><td colspan="2"><center>Orders</center></td></tr>
<th style="color:#1A446C"><b>No of orders</b></th>
<th style="color:#1A446C"><b>Date</th>
	<th>Delete</th>
</tr>

<?php
while($list=mysqli_fetch_assoc($record)){
	echo "<tr>";
	//echo "<td>".$list['SN']."</td>";
		echo "<td>".$list['Rows']."</td>";
			echo "<td>".$list['Date'];
            		echo "<td><a href=views.php?id=".$list['Id']."><input type=Submit value=View></a></td>";
           
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

