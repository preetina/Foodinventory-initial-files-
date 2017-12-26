<?php
include("dbconnect.php");
include("index.php");

//include("Kitchenpanel.php");
//make connection


//select db

$sql= "SELECT * FROM `list` ORDER BY Quantity ";
//$sql= "SELECT * FROM `list` ORDER BY Quantity aesc ";
$record=mysqli_query($dbconnect,$sql);

?>
<html>
<head>
<title>Display records</title>
<style type="text/css">
    .button-clicked {
  background: red;
}
</style>
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
<br />

<p style="text-align: left; font-family:  font-size:28px; text-align:center;"><b>Manage your stock!</b></p>
<table width="600px" border="2" cellpadding="2" cellspacing="2" align="center">
<tr style="font-family: Cambria">

<th style="color:#1A446C"><a href="insert.php"><b>Add</b></a></th>


</tr>
</table>

<br /><br />
<table width="600px" border="2" cellpadding="2" cellspacing="2" align="center">
<tr style="font-family: Cambria">

<th style="color:#1A446C"><b>Item</b></th>
<th style="color:#1A446C"><b>Quantity</th>
<th style="color:#1A446C"><b>Category</th>
<th style="color:#1A446C"><b>Date</th>
<th style="color:#1A446C"><b>Rate</th>
<th style="color:#1A446C"><b>Update</th>
<th style="color:#1A446C"><b>Delete</th>



</tr>

<?php
//print_r(mysqli_fetch_assoc($record));exit;
while($list=mysqli_fetch_assoc($record)){
	echo "<tr>";
	//echo "<td>".$list['SN']."</td>";
		echo "<td>".$list['Item']."</td>";
		echo "<td>".$list['Quantity'].$list['Unit']."</td>";
            	echo "<td>".$list['Category']."</td>";
                echo "<td>".$list['Date']."</td>";
                  echo "<td>".$list['Rate']."</td>";
                	//echo "<td><a href=confirm.php?item=".$list['Item']."&quantity=".$list['Quantity']."&id=".$list['SN']."><input type=Submit value=Insert></a></td>";
                    	echo "<td><a href=update.php?item=".$list['Item']."&quantity=".$list['Quantity']."&id=".$list['SN']."><input type=Submit value=Update></a></td>";
                    	echo "<td><a href=delete.php?item=".$list['Item']."&quantity=".$list['Quantity']."&id=".$list['SN']."><input type=Submit value=Delete></a></td>";
                        
                    //echo "<td><button id="button">Button</button></td>";
                

echo "</tr>";
}
//mysqli_free_result($list);
?>
</table>
</div>
</body>
</html>

