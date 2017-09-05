<?php
include("index.php");
if(isset($_POST['search']))
{
    $valueToSearch=$_POST['valueToSearch'];
    $query="SELECT * FROM `log` WHERE Concat(`Date`) LIKE'%".$valueToSearch."%'";
     $search_result=filterTable($query);
}
else{
    $query="SELECT * FROM `log` ORDER BY Date desc";
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

    <form action="log_search.php" method="post">
    <br />
    <br /><br/>
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b> Stock Management </b></p>
<p style="text-align:center; font-size:18px;"><b>Search in log!</b></p>
<label>Enter Date</label><br /><input type="date" name="valueToSearch"><br /><br />
<input type="submit" name="search" value="Search"><br /><br />
   
    
    <table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="font-family: Cambria">
<th style="color:#1A446C"><b>Date</b></th>
<th style="color:#1A446C"><b>Name</b></th>
<th style="color:#1A446C"><b>Quantity</b></th>

</tr>
<?php

while($row=mysqli_fetch_array($search_result)):?>

<tr>
<td><?php echo $row['Date']?></td>
<td><?php echo $row['Name'];?></td>	
<td><?php echo $row['Quantity'];?></td>	
</tr>

<?php endwhile;?>
  
</table>

</form>
</div>


</body>
</html>