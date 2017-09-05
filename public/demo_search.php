<?php
include("index.php");
if(isset($_POST['search']))
{
    $valueToSearch=$_POST['valueToSearch'];
    $query="SELECT * FROM `list` WHERE Concat(`Category`) LIKE'%".$valueToSearch."%'";
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
<html><head><body>
<table width="600px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="font-family: Cambria">
<th style="color:#1A446C"><b>Item</b></th>
<th style="color:#1A446C"><b>Quantity</b></th>
<th style="color:#1A446C"><b>Category</b></th>
<th style="color:#1A446C"><b>Date</b></th>
<th style="color:#1A446C"><b>Rate</b></th>

</tr>

<?php

if(isset($_POST['search']) && !empty($_POST['valueToSearch'])):
    while($row=mysqli_fetch_array($search_result)):?>
    
    <tr>
    <td><?php echo $row['Item']?></td>
    <td><?php echo $row['Quantity'];?></td>	
    <td><?php echo $row['Category'];?></td>	
    <td><?php echo $row['Rate'];?></td>	
    <td><?php echo $row['Date'];?></td>	
    </tr>
    
    <?php endwhile;?>
  <?php endif;?>
  </table>
  </body></head></html>