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
<br />
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>Restock these Items!</b></p>
<br />
<table width="400px" border="2" cellpadding="2" cellspacing="3" align="center">
<tr style="font-family: Cambria">
<th style="color:Black"><b>Item</b></th>
<th style="color:Black"><b>Quantity</th>
<th style="color:Black"><b>Category</th>
</tr>



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
        
      
        //print_r($datas)
    foreach($datas as $data)
    {
        //echo $data['Item']. " ";
        //echo $data['Quantity']. " ";
        
        
    
    if($data['Quantity']<=10)
    
   {
        	echo "<tr>";
    	echo "<td>".$data['Item']."</td>";
        if($data['Quantity']<=3)
        {
             echo "<td style='color:red'>".$data['Quantity'].$data['Unit']."</td>";
        }
        else
            echo "<td style='color:black'>".$data['Quantity'].$data['Unit']."</td>";
       
        	echo "<td>".$data['Category']."</td>";
        	echo "</tr>";
   }
   }
    
    ?>
   </table>
    </div>
</body>
</html>
