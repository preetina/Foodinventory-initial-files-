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
    <br />

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Add Stock</b></a></p>


<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="stock_modify.php" ><b>Update Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="delete_item.php" ><b>Delete Stock</b></a></p>
<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
    
</div>
<br/>
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>Stock Management</b></p>
<p style="text-align: left; font-family: Lucida Calligraphy; font-size:19px; text-align:center;"><b>Update your stock here!</b></p>
<table width="600px" border="2" cellpadding="2" cellspacing="2" align="center">
	<tr>

	<th>Item</th>
	<th>Quantity</th>
    <th>Category</th>
	<th>Date</th>
	<th>Rate</th>
	<th>Update</th>
	</tr>
	<?php
	while($row=mysqli_fetch_array($records))
	{
		echo "<tr><form action=stock_update.php method=post >";
		//echo "<td><input type=text name=SN value='".$row['SN']."'></td>";
	
		echo "<td><input type=text name=item value='".$row['Item']."'></td>";
		
			echo "<td><input type=text name=quan value='".$row['Quantity']."'></td>";
            echo "<td><input type=text name=quan value='".$row['Category']."'></td>";
			echo "<td><input type=text name=dat value='".$row['Date']."'></td>";
			echo "<td><input type=text name=rat value='".$row['Rate']."'></td>";
			echo "<input type=hidden name=sn value='".$row['SN']."'>";
			echo "<td><input type=Submit value=Submit>";
			//echo "<td><a href=delete.php?id=".$row['SN']."><input type=Submit value=Delete></a></td>";

echo "</form></tr>";
		
	}
	?>
</table>
<div>
<br/>


</div>
</div>
<br/>



</body>
</html>
