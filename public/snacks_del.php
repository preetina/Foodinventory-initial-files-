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
$sql="SElECT * FROM menu where Category='Snacks'";


//Executing the query

$records=mysqli_query($con,$sql);

?>
 <div id="main">
    <div id="navigation">
<h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px ;"><b><u><a href="admin.php">Admin Panel</a></u></b></h1>
<p style="font-size:18px; font-family: Minion Pro Med; color:#EEE4B9;"><b>Menu Management</b></p>

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="menuinsert.php"><b>Insert Item</b></a></p>

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="menu_del.php"><b>Delete Item</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="update_menu.php"><b>Update Item</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="menu_view.php"><b>View Menu</b></a></p>
<hr />
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="stockpanel.php"><b>Stock Management</b> </a></p>
<p style="font-size:17px; font-family: Minion Pro Med;"><a href="display_order.php"><b>View Orders</b> </a></p>
<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
</div>
<br/>
 <p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>Menu Management</b></p>
 <p style="text-align: left; font-size:19px; text-align:center"><b>Delete your item here!</b></p>

<table width="400px" border="2" cellpadding="3" cellspacing="3" align="center">
	<tr>
<tr style="color:#1A446C;"><td colspan="4"><center>Snacks</center></td></tr>
	<th>Name</th>
    <th>Category</th>
   
	<th>Delete</th>
		</tr>
	<?php
	while($row=mysqli_fetch_array($records))
	{
		echo "<tr>";
		echo "<td>".$row['Name']."</td>";
        	echo "<td>".$row['Category']."</td>";

		echo "<td><a href=delete_menu.php?id=".$row['Id']."><input type=Submit value=Delete></a></td>";

	
	}
	?>
</table>


<br/>
</div>

</body>
</html>
