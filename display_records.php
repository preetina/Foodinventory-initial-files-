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

<table width="600px" border="2" cellpadding="2" cellspacing="2>
<tr style="color:#1A446C">
<th style="color:#1A446C"><b>SN</b></th>
<th style="color:#1A446C"><b>Name</b></th>
<th style="color:#1A446C"><b>Quantity</th>
</tr>

<?php
while($list=mysqli_fetch_assoc($record)){
	echo "<tr>";
	echo "<td>".$list['SN']."</td>";
		echo "<td>".$list['Name']."</td>";
			echo "<td>".$list['Quantity']."</td>";
echo "</tr>";
}//end while
?>
</table>
</body>
</html>

