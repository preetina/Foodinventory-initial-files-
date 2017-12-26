<html>
<?php include("index.php");

//make connection


//select db

$sql= "select * From list";
$record=mysqli_query($dbconnect,$sql);


?>

<head><title>Adminpanel</title>
<link href="stylesheets/basic1.css" media="all" rel="stylesheet" type="text/css"/></head>
<div id="main">
    <div id="navigation">

<h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px;"><b><u>Admin Panel</u></b></h1>
<br />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Add Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="stock_modify.php" ><b>Update Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="delete_item.php" ><b>Delete Stock</b></a></p>


<p style="font-size:17px; font-family: Minion Pro Med;"><a href="menupanel.php"><b>Menu Management</b> </a></p>

</div>
<br/>
<p><b>Welcome to our Admin Panel !</b></p>
<body>
	<table width="600px" border="2" cellpadding="2" cellspacing="2">
<tr>
<th style="color:#1A446C"><b>SN</b></th>
<th style="color:#1A446C"><b>Item</b></th>
<th style="color:#1A446C"><b>Quantity</th>
<th style="color:#1A446C"><b>Date</th>
<th style="color:#1A446C"><b>Rate</th>



</tr>

<?php
while($list=mysqli_fetch_assoc($record)){
	echo "<tr>";
	echo "<td>".$list['SN']."</td>";
		echo "<td>".$list['Item']."</td>";
			echo "<td>".$list['Quantity']."</td>";
				echo "<td>".$list['Date']."</td>";
					echo "<td>".$list['Rate']."</td>";
echo "</tr>";
}//end while
?>
</table>

</body>
</html>