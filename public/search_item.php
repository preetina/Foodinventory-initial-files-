<?php
include("index.php");
$Item ="";
if(isset($_POST['search']))
{
    $valueToSearch=$_POST['valueToSearch'];
    $query="SELECT * FROM `list` WHERE Concat(`Item`, `Quantity`, `Unit`, `Category`,`Date`) LIKE'%".$valueToSearch."%'";
     $search_result=filterTable($query);
}
else{
    $query="SELECT * FROM `list`";
    $search_result=filterTable($query);
    
}
function filterTable($query)
{
    $connect=mysqli_connect("localhost","root","","foodinventory");
    $filter_Result=mysqli_query($connect,$query);
    return $filter_Result;
}

while($row=mysqli_fetch_array($search_result)):
{
	$Item=$row['Item'];
	$Quantity=$row['Quantity'].$row['Unit'];
	$Category=$row['Category'];
	$Rate=$row['Rate'];
	$Date=$row['Date'];

}	endwhile;


?>

<html>
<body>
<div id="main">
    <div id="navigation">

	<h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px ;"><b><u><a href="admin.php">Admin Panel</a></u></b></h1>
<p style="font-size:18px; font-family: Minion Pro Med; color:#EEE4B9;"><b>Stock Management</b></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="demo.php" ><b>Manage Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="up2.php" ><b>View Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="thre.php" ><b>Alert</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="log_search.php" ><b>View Log</b></a></p>
<hr />
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="menupanel.php"><b>Menu Management</b> </a></p>
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="display_order.php"><b>View Orders</b> </a></p>

<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>


	</div>

<form>
	<br /><br /><br/>
	<fieldset>
	<legend align="center">
	<p style="text-align:center; font-size:30px; font-family: Calibri ; color:#8D0D19 "><b><center> Item Details:</center></b></p>
	</legend>
	

<table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
	<tr style="font-family: Cambria">
		<th style="color:#1A446C"><b>Item</b></th>
		<th style="color:#1A446C"><b>Quantity</th>
		<th style="color:#1A446C"><b>Category</th>
		<th style="color:#1A446C"><b>Date</th>
		<th style="color:#1A446C"><b>Rate</th>

	</tr>
	<?php if($Item=="")
    {
        echo "<td colspan=5><center> Item Not Found!<center></td>";
    }
    else{  ?>
	<tr>
		<td> <?php echo  $Item; ?></td>
		<td> <?php echo  $Quantity; ?></td>
		<td> <?php echo  $Category; ?></td>
		<td> <?php echo  $Date; ?></td>
		<td> <?php echo  $Rate; ?></td>
	</tr>
    <?php  }  ?>
</table></fieldset>
</form>
</div>
</body>
</html>	