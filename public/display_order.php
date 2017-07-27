<?php
include("dbconnect.php");
include("index.php");

//include("Kitchenpanel.php");
//make connection


//select db

$sql= "SELECT * FROM `order`";
$record=mysqli_query($dbconnect,$sql);

?>
<html>
<head>
<title>Display records</title>
</head>
<body>
<p style="text-align: right;"><a href="home.php"><input type="Button" value="Logout"></a></p>
<p style="text-align: left; font-family: Lucida Calligraphy; font-size:28px; text-align:center;"><b>Ordered Items!</b></p>
<table width="600px" border="2" cellpadding="2" cellspacing="2" align="center">
<tr style="font-family: Cambria">

<th style="color:#1A446C"><b>Item</b></th>
<th style="color:#1A446C"><b>Quantity</th>
</tr>

<?php
//print_r(mysqli_fetch_assoc($record));exit;
while($list=mysqli_fetch_assoc($record)){
	echo "<tr>";
	//echo "<td>".$list['SN']."</td>";
		echo "<td>".$list['Item']."</td>";
			echo "<td>".$list['Quantity']."</td>";
echo "</tr>";
}
//mysqli_free_result($list);
?>
</table>
</body>
</html>

