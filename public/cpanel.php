<html>
<?php include("../includes/layouts/header.php");
include("dbconnect.php")?>
<head>

<title>Cpanek</title>
</head>
<link href="stylesheets/basic1.css" media="all" rel="stylesheet" type="text/css"/></head>
<div id="main">
<div id="navigation">
<h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px ;"><b><u><a href="admin.php">Admin Panel</a></u></b></h1>
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="stockpanel.php"><b>Stock Management</b> </a></p>
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="menupanel.php"><b>Menu Management</b> </a></p>
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="display_order.php"><b>View Orders</b> </a></p>
<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>

</div>
<center><img src="admin.jpg" style="width:1120px  ;height:600px"></center></div>


<!--<p style="text-align:center; font-size:40px; font-family: Lucida Calligraphy ; color:black "><b>Welcome To Admin Panel!</b></p>
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>Restock these Items!</b></p>
<br />-->
<!--<table width="400px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="font-family: Cambria">
<th style="color:Black"><b>Item</b></th>
<th style="color:Black"><b>Quantity</th>
<th style="color:Black"><b>Category</th>
</tr>

-->

<?php

$sql="Select Item,Quantity,Unit,Category From list ORDER BY Quantity asc";
$result=mysqli_query($dbconnect,$sql);
$datas=array();
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result)){
$datas[]=$row;
}
}

$low_stock="";
//print_r($datas)
foreach($datas as $data)
{
//echo $data['Item']. " ";
//echo $data['Quantity']. " ";



if($data['Quantity']<=3)

{
//echo "<tr>";
//echo "<td>".$data['Item']."</td>";
$low_stock.=$data['Item']." \\t";
//echo "<td style='color:#DC143C'>".$data['Quantity'].$data['Unit']."</td>";

$low_stock.=$data['Quantity']." ".$data['Unit']."\\t".$data['Category']." \\n";
//$low_stock.=$data['Category']." \\n";
//echo "<td>".$data['Category']."</td>";
//echo "</tr>";
}
}
echo "<script type='text/javascript'>alert('ALERT \\nPlease restock these items...\\t \\n".$low_stock."')</script>";



?>
<script type="text/javascript">
var element = $('data');
var p = [];
for (var i = 0; i < element.length; i++) {
p.push($(element).eq(i).val());
}
alert(JSON.stringify(p));//or alert(p)

</script>

</table>
</div>
<body >

</body>
</html>
