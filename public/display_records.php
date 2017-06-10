<?php
include ("dbconnect.php");
include("Kitchenpanel.php");
//make connection


//select db

$sql= "select * From list";
$record=mysqli_query($dbconnect,$sql);


?>
<html>
<head>
<title>Display records</title>
</head>
<body>

<p style="text-align: center;">View Your Product List here!</p>
<table width="600px" border="2" cellpadding="2" cellspacing="2" align="center">
<tr style="font-family: Cambria">

<th style="color:#1A446C"><b>Item</b></th>
<th style="color:#1A446C"><b>Quantity</th>
</tr>

<?php
while($list=mysqli_fetch_assoc($record)){
	echo "<tr>";
	//echo "<td>".$list['SN']."</td>";
		echo "<td>".$list['Item']."</td>";
			echo "<td>".$list['Quantity']."</td>";
echo "</tr>";
}//end while
?>
</table>
</body>
</html>

