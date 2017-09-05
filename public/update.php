<?php
session_start();
//check if user is logged in.If not redirect to admin page.
if(!isset($_SESSION['admin']))
{
	//header("Location:index.php?page=admin");
}
include("index.php");
include("dbconnect.php");

if(isset($_POST) && !empty($_POST)){
    
    //print_r($_POST);
    $Item=$_POST['Item'];
	     $Quantity=$_POST['Quantity'];
          $Unit=$_POST['Unit'];
	     $Category=$_POST['Category'];
	     $Date=$_POST['Date'];
	     $Rate=$_POST['Rate']; 
   $squery= "select * from list";
         $result=mysqli_query($dbconnect,$squery);
         $datas=array();
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result)){
                    if($Item==$row['Item'])
                    {
                        $id=$row['SN'];
                        $newq=$Quantity+$row['Quantity'];
                        //$newd=$Date;
                        
                    }
            }
        }
        $inquery="UPDATE list SET Quantity='" .$newq."', Unit='".$Unit."', Category='".$Category."', Date='".$Date."', Rate='".$Rate."' WHERE SN=".$id;
        //var_dump($inquery);
        
        if ($dbconnect->query($inquery) === TRUE) {
  
    header("refresh:0.5; url=demo.php");
    
      //echo "New record created successfully";
} else {
    echo "Error: " . $inquery . "<br>" . $connection->error;
}

$dbconnect->close();
}else if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = (int) $_GET['id'];
   $sgetData = "select *from list where SN=".$id; 
   $query = mysqli_query($dbconnect,$sgetData);
   $result = mysqli_fetch_assoc($query);
 
    


?>
<html>
<head>
<title>Update Item</title>
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
<br/>
<form action="update.php?id=<?=$id;?>" method="post">
<table width=400px" border="5" cellpadding="1" cellspacing="1" align="center">
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>Stock Management</b></p>
<center><p><b>Update the stock!</b></p></center>
<tr><th><br/>Item <input type="text" name="Item" value="<?=$result['Item'];?>" placeholder="Enter the Item" required ><br/></th></tr>

<tr><th><br/>Quantity <input type="text" name="Quantity"  placeholder="Enter the Quantity" required ><br/></th></tr>
<tr><th><br/>Unit <input type="text" name="Unit"  value="<?=$result['Unit'];?>" placeholder="Enter the Quantity" required ><br/></th></tr>
<!--<tr><th><br/>Unit <select name="Unit" >
<option value="Kg">Kilogram</option>
<option value="Packet">Packet</option>
<option value="Litre">Litre</option>
<option value="Bottle">Bottle</option></th></tr>-->
<tr><th><br/><label>Date</label><input type="date" name="Date" required /><br/></th></tr>
<tr><th><br/>Rate <input types="text" name="Rate" placeholder="Enter the Rate" required><br /></th></tr>
<!--<tr><th><br/>Category <select name="Category" >
<option value="Miscellaneous">Miscellaneous</option>
<option value="Fruit & Grocery">Fruits & Grocery</option>
<option value="Spices">Spices</option>
<option value="Lentils">Lentils</option>
<option value="Liquid & Beverages">Liquid & Beverages</option></th></tr>-->
<tr><th><br/>Category <input type="text" name="Category"  value="<?=$result['Category'];?>" placeholder="Enter the Quantity" required ><br/></th></tr>
<tr><td colspan="2"><br /><b><center><input type="submit" name="add" value="Update">
<!--<input type="submit" name="update" value="Add"></center></b></p></td></tr>-->



</table>
 <?php }
 ?> 
<br/><br/>


</div>

</div>

</form>

</body>
</html>

