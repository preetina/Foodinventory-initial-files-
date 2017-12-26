<?php
include("index.php");
if(isset($_POST['search']))
{
    $valueToSearch=$_POST['valueToSearch'];
    $query="SELECT * FROM `menu` WHERE Concat(`Name`,`Category`, `Price`) LIKE'%".$valueToSearch."%'";
     $search_result=filterTable($query);
}
else{
    $query="SELECT * FROM `menu`";
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

 <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px ;"><b><u>Admin Panel</u></b></h1>
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

    <form action="search.php" method="post">
    <br />
    <br /><br/>
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b> Menu Management </b></p>
<p style="text-align:center; font-size:18px;"><b>Search in Menu!</b></p>
<input type="text" name="valueToSearch" placeholder="Enter an Item here"><br /><br />
<input type="submit" name="search" value="Search"><br /><br />
   
    
    <table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="font-family: Cambria">
<th style="color:#1A446C"><b>Name</b></th>
<th style="color:#1A446C"><b>Category</b></th>

<th style="color:#1A446C"><b>Price</th>

</tr>
<?php
while($row=mysqli_fetch_array($search_result)):?>
<tr>
<td><?php echo $row['Name'];?></td>	
<td><?php echo $row['Category'];?></td>	

<td><?php echo $row['Price'];?></td>
</tr>

<?php endwhile;?>
</table>

</form>
</div>


</body>
</html>