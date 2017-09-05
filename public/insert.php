
<?php
  //1.creating a database connection
   $dbhost="localhost";
   $dbuser="root";
   $dbpass="";
   $dbname="foodinventory";
   $connection =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  //Testing if connection occurred or not.
     if(mysqli_connect_errno())
	 {
		 die("Database connection failed:".
		    mysqli_connect_error() .
			"(". mysqli_connect_errno() .")"
			);
	 }
	 
		   
		  ?>
		 
		
         <?php
         if(isset($_POST['Add']))
         {
		 $Item=$_POST['Item'];
	     $Quantity=$_POST['Quantity'];
          $Unit=$_POST['Unit'];
	     $Category=$_POST['Category'];
	     $Date=$_POST['Date'];
	     $Rate=$_POST['Rate'];
    // $SN=mysqli_real_escape_string($connection,$SN);
		 
		 
		  //2. performing database query
 	 
		$query = "INSERT into list VALUES (NULL,'".$Item."','".$Quantity."','".$Unit."','".$Category."','".$Date."',".$Rate.")";
      //  $query="UPDATE list SET Item=" '.$_POST[item].', Quantity='$_POST[quan]',Date='$_POST[dat]',Rate='$_POST[rat]' WHERE SN='$_POST[sn]'";

		// var_dump($query);
		
if ($connection->query($query) === TRUE) {
  
    header("refresh:0.5; url=demo.php");

}
}
?>
<?php
session_start();
//check if user is logged in.If not redirect to admin page.
if(!isset($_SESSION['admin']))
{
	//header("Location:index.php?page=admin");
}
include("index.php");
include("dbconnect.php");
?>
<html>
<head>
<title>Php insert update and delete</title>
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
<form action="insert.php" method="post">
<table width=400px" border="5" cellpadding="1" cellspacing="1" align="center">
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>Stock Management</b></p>
<center><p><b>Update the stock!</b></p></center>
<tr><th><br/>Item <input type="text" name="Item" placeholder="Enter the Item" required ><br/></th></tr>

<tr><th><br/>Quantity <input type="text" name="Quantity" placeholder="Enter the Quantity" required ><br/></th></tr>
<tr><th><br/>Unit <select name="Unit" >
<option value="Kg">Kilogram</option>
<option value="Packet">Packet</option>
<option value="Litre">Litre</option>
<option value="Bottle">Bottle</option></th></tr>
<!--<tr><th><br/>Date <input type="text" name="Date" placeholder="Enter the Date" required><br/></th></tr>-->
<tr><th><br/><label>Date</label><input type="date" name="Date" required/><br/></th></tr>
<tr><th><br/>Rate <input types="text" name="Rate" placeholder="Enter the Rate" required><br /></th></tr>
<tr><th><br/>Category <select name="Category" >
<option value="Miscellaneous">Miscellaneous</option>
<option value="Fruit & Grocery">Fruits & Grocery</option>
<option value="Spices">Spices</option>
<option value="Lentils">Lentils</option>
<option value="Liquid & Beverages">Liquid & Beverages</option></th></tr>

<tr><td><center><input type="submit" name="Add" value="Add"/></center></b></p></td></tr>


</table>
 
<br/><br/>


</div>

</div>

</form>

</body>
</html>

