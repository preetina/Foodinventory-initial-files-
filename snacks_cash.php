<?php
include ("index.php");

$sql="select * From menu where Category='Snacks'";
$rec=mysqli_query($dbconnect,$sql);
?>
<html>
<head>
<title>Display records</title>
</head>
<body>
 <div id="main">
    <div id="navigation">
   


<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="billing.php"><b>Generate Bill</b></a></p>

</div>
<br/>
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b> Menu Management </b></p>
<p style="text-align:center; font-size:18px;"><b>View Menu!</b></p>

<table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="font-family: Cambria">
<tr style="color:#1A446C"><td colspan="4"><center>Snacks</center></td></tr>
<th style="color:#1A446C"><b>Item</b></th>


<th style="color:#1A446C"><b>Price</th>

</tr>

<?php
while($list=mysqli_fetch_assoc($rec)){
	echo "<tr>";
	//echo "<td>".$list['SN']."</td>";
		echo "<td>".$list['Name']."</td>";
        //echo "<td>".$list['Category']."</td>";
		
            echo "<td>".$list['Price']."</td>";
         
echo "</tr>";
}
//end while
?>
</table>


<div>
<br/>

</div>
</div>

</body>
</html>



