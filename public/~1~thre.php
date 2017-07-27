<?php
include("index.php");
?>
<!DOCTYPE html>
<html>
 <head>
 </head>
<body>
<div id="main">
    <div id="navigation">
    <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px ;"><b><u>Admin Panel</u></b></h1>

<br />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Add Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="stock_modify.php" ><b>Update Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="delete_item.php" ><b>Delete Stock</b></a></p>

<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
</div>
<table width="400px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="font-family: Cambria">
<th style="color:#1A446C"><b>Item</b></th>
<th style="color:#1A446C"><b>Quantity</th>
</tr>



    <?php
   
        $sql="Select Item,Quantity,Unit From list";
        $result=mysqli_query($dbconnect,$sql);
        $datas=array();
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result)){
                $datas[]=$row;
            }
        }
        
      
        //print_r($datas)
    foreach($datas as $data)
    {
        //echo $data['Item']. " ";
        //echo $data['Quantity']. " ";
        
        
    
    if($data['Quantity']<=10)
    
   {
        	echo "<tr>";
    	echo "<td>".$data['Item']."</td>";
        echo "<td>".$data['Quantity'].$data['Unit']."</td>";
        	echo "<tr>";
   }
   }
    
    ?>
   </table>
    </div>
</body>
</html>
