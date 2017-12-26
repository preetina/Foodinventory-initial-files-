<?php
include("index.php");
if(isset($_POST['search']))
{
    $valueToSearch=$_POST['valueToSearch'];
    $query="SELECT * FROM `list` WHERE Concat(`Item`, `Quantity`, `Unit`, `Category`) LIKE'%".$valueToSearch."%'";
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

?>

<html>
<head>
<title>Filter</title></head>
<body>
<div id="main">
    <div id="navigation">

<h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px ;"><b><u>AdminPanel</u></b></h1>

<br />

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Add Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="delete_item.php" ><b>Delete Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="view_admin.php" ><b>View Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="thre.php" ><b>Alert</b></a></p>
<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>

</div>
    <form action="search_del.php" method="post">
    <br />
    <br />
    <input type="text" name="valueToSearch" placeholder="Enter an Item here"><br /><br />
    <input type="submit" name="search" value="Search"><br /><br />
    
    <table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="font-family: Cambria">
<th style="color:#1A446C"><b>Item</b></th>
<th style="color:#1A446C"><b>Quantity</b></th>
<th style="color:#1A446C"><b>Category</b></th>
<th style="color:#1A446C"><b>Rate</b></th>
<th style="color:#1A446C"><b>Date</b></th>
<th style="color:#1A446C"><b>Delete</th>

</tr>
<?php
while($row=mysqli_fetch_array($search_result)):?>
<tr>
<td><?php echo $row['Item'];?></td>
<td><?php echo $row['Quantity'].$row['Unit'];?></td>	
<td><?php echo $row['Category'];?></td>
<td><?php echo $row['Rate'];?></td>
<td><?php echo $row['Date'];?></td>

<td><?php echo "<td><a href=delete.php?id=".$row['SN']."><input type=Submit value=Delete></a></td>";?></td>
	

</tr>

<?php endwhile;?>
</table>

</form>
</div>


</body>
</html>