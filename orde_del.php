<html>
<head></head>
<body>
<?php
include("index.php");
//connecting to the mysql database
$con=mysqli_connect('127.0.0.1','root','');

//selecting the database
mysqli_select_db($con,'foodinventory');

//selecting query
$sql="SElECT *FROM order'";

//Executing the query

$records=mysqli_query($con,$sql);

?>

<div id="main">
    <div id="navigation">
    <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px;"><b><u>Admin Panel</u></b></h1>
    <br />

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Add Stock</b></a></p>
<p style="text-align: left; font-family:Minion Pro Med; font-size: 17px"><a href="delete_item.php" ><b>Delete Stock</b></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="view_admin.php" ><b>View Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="thre.php" ><b>Alert</b></a></p>


<hr/>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
    
</div>
<br/>
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>Stock Management</b></p>
<p style="text-align: left; font-family: Lucida Calligraphy; font-size:18px; text-align:center;"><b>Delete From Liquid & Beverages!</b></p>
<table width="600px" border="2" cellpadding="2" cellspacing="2" align="center">
	<tr>

	<th>Item</th>
	<th>Quantity</th>
    
	<th>Category</th>
	<th>Date</th>
	<th>Delete</th>
	</tr>
	<?php
	while($row=mysqli_fetch_array($records))
	{
		echo "<tr>";
		echo "<td>".$row['Item']."</td>";
		echo "<td>".$row['Quantity'].$row['Unit']."</td>";
        echo "<td>".$row['Category']."</td>";
			echo "<td>".$row['Date']."</td>";
	
		echo "<td><a href=deleteorder.php?id=".$row['SN']."><input type=Submit value=Delete></a></td>";

	
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

