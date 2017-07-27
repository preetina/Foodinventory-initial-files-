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
//$sql="SElECT * FROM menu";
$sql="SElECT * FROM menu where Category='Snacks'";
$bev="SElECT * FROM menu where Category='Beverages'";
$break="SElECT * FROM menu where Category='Breakfast'";

//Executing the query

$records=mysqli_query($con,$sql);
$brec=mysqli_query($con,$bev);
$brerec=mysqli_query($con,$break);

?>
<div id="main">
    <div id="navigation">
    <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px;"><b><u>Menu Management</u></b></h1>
    <br />

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="menuinsert.php"><b>Insert Item</b></a></p>

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="delete_from_menu.php"><b>Delete Item</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="menu_update.php"><b>Update Item</b></a></p>
<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>



    
</div>
 <br/><p style="text-align: left; font-family: Lucida Calligraphy; font-size:19px; text-align: center;"><b>Update your menu here!</b></p>
<table width="100px" border="2" cellpadding="2" cellspacing="2" align="left">
	<tr>
    
    
<tr style="color:#1A446C;"><td colspan="3"><center>Snacks</center></td></tr>
	<th>Name</th>
	<th>Price</th>
	<th>Update</th>
	
	</tr>
	<?php
	while($row=mysqli_fetch_array($records))
	{
		echo "<tr><form action=menu_update.php method=post >";
	
		echo "<td><input type=text name=nam value='".$row['Name']."'></td>";
			echo "<td><input type=text name=price value='".$row['Price']."'></td>";
			echo "<input type=hidden name=Id value='".$row['Id']."'>";
		
			echo "<td><input type=Submit value=Submit>";

echo "</form></tr>";
		
	}
	?>
</table>


<table width="100x" border="2" cellpadding="2" cellspacing="2" align="left">
	<tr>
    
    
    <tr style="color:#1A446C;"><td colspan="3"><center>Beverages</center></td></tr>
	<th>Name</th>
	<th>Price</th>
	<th>Update</th>
	
	</tr>
	<?php
	while($row=mysqli_fetch_array($brec))
	{
		echo "<tr><form action=menu_update.php method=post >";
	
		echo "<td><input type=text name=nam value='".$row['Name']."'></td>";
			echo "<td><input type=text name=price value='".$row['Price']."'></td>";
			echo "<input type=hidden name=Id value='".$row['Id']."'>";
		
			echo "<td><input type=Submit value=Submit>";

echo "</form></tr>";
		
	}
	?>
</table>

<table width="100px" border="2" cellpadding="2" cellspacing="2" align="left">
	<tr>
    
    
<tr style="color:#1A446C;"><td colspan="3"><center>Breakfast</center></td></tr>
	<th>Name</th>
	<th>Price</th>
	<th>Update</th>
	
	</tr>
	<?php
	while($row=mysqli_fetch_array($brerec))
	{
		echo "<tr><form action=menu_update.php method=post >";
	
		echo "<td><input type=text name=nam value='".$row['Name']."'></td>";
			echo "<td><input type=text name=price value='".$row['Price']."'></td>";
			echo "<input type=hidden name=Id value='".$row['Id']."'>";
		
			echo "<td><input type=Submit value=Submit>";

echo "</form></tr>";
		
	}
	?>
</table>



<br/>

</div>



</body>
</html>
