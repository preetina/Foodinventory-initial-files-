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
		 //often these are form values in $_POST
		 $Name=$_POST['Name'];
        $Category=$_POST['Category'];
	     $Price=$_POST['Price'];
       
	     
    // $SN=mysqli_real_escape_string($connection,$SN);
		 
		 
		  //2. performing database query
 	 
		$query = "INSERT INTO `menu`(`Id`, `Name`,`Category`, `Price`) VALUES (null,'".$Name."','".$Category."',".$Price.")";
		// var_dump($query);
		
if ($connection->query($query) === TRUE) {
  
    header("refresh:0.5; url=menuinsert.php");
      //echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();
		  
		   ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	
		<title>database</title>
	</head> 

	<body>

	 
		
	</body>
</html>
 <?php
 
    //.5 close database connection
	  //mysqli_close($connection); 
 ?>
