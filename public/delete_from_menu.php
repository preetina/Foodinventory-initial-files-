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
?><p style="text-align:right"><a href="home.php"><input type="Button" value="Logout"></a></p>
<p style="text-align: left; font-family: Lucida Calligraphy; font-size:19px; text-align:center"><b>Delete your item here!</b></p>

<table width="600px" border="2" cellpadding="2" cellspacing="2" align="center">
	<tr>

	<th>Name</th>
	<th>Price</th>
	<th>Delete</th>
		</tr>
	<?php
	while($row=mysqli_fetch_array($records))
	{
		echo "<tr>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Price']."</td>";
		echo "<td><a href=delete_menu.php?id=".$row['Id']."><input type=Submit value=Delete></a></td>";

	
	}
	?>
</table>
<br/>


</body>
</html>
