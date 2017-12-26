
<?php
include("index.php");
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
         if(isset($_POST['add']))
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
  
    header("refresh:0.5; url=insert.php");

}
}
?>