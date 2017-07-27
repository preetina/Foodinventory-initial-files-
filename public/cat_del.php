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
    <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px;"><b><u>Admin Panel</u></b></h1>
<p>(Stock Management)</p>

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Add Stock</b></a></p>


<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="stock_modify.php" ><b>Update Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="delete_item.php" ><b>Delete Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
    
</div>
<br/>

<p style="text-align: left; font-family: Lucida Calligraphy; font-size:19px; text-align:center;"><b>Delete your stock here!</b></p>
<table width="600px" border="2" cellpadding="2" cellspacing="2" align="center">
	<tr>

	<th>Item</th>
	<th>Quantity</th>
	<th>Category</th>
	<th>Date</th>
	<th>Rate</th>
	<th>Delete</th>
	</tr>
	<?php
	while($row=mysqli_fetch_array($records))
	{
		echo "<tr>";
		echo "<td>".$row['Item']."</td>";
		echo "<td>".$row['Quantity']."</td>";
			echo "<td>".$row['Category']."</td>";
		echo "<td>".$row['Rate']."</td>";
		echo "<td>".$row['Date']."</td>";
		echo "<td><a href=delete.php?id=".$row['SN']."><input type=Submit value=Delete></a></td>";

	
	}
	?>
</table>
<div>
<br/>


</div>
</div>
















<br/>

<br/>


</body>
</html>
