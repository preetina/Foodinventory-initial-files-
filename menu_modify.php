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
$sql="SElECT * FROM menu";

//Executing the query

$records=mysqli_query($con,$sql);
?>
<p style="text-align: left; font-family: Lucida Calligraphy; font-size:19px;"><b>Update your menu here!</b></p>
<table width="600px" border="2" cellpadding="2" cellspacing="2">
	<tr>

	<th>Name</th>
	<th>Price</th>
	
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
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>


</body>
</html>
