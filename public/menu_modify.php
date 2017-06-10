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
<p style="text-align: right"><a href="home.php"><input type="Button" value="Logout"></a></p>
 <p style="text-align: left; font-family: Lucida Calligraphy; font-size:19px; text-align: center;"><b>Update your menu here!</b></p>
<table width="600px" border="2" cellpadding="2" cellspacing="2" align="center">
	<tr>
    
    

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
<br/>



</body>
</html>
