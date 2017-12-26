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
         if(isset($_POST['submit']))
         {
		// $SN=$_POST['SN'];
	     $Date=$_POST['Date'];
          $Name=$_POST['Name'];
	     $Quantity=$_POST['Quantity'];
	     
		 
		 
		 $squery= "select * from log";
         $result=mysqli_query($dbconnect,$squery);
         $datas=array();
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result)){
                //$id=$row['SN'];
                    if($Name==$row['Name']&& $Date==$row['Date'])
                    {
                        $id=$row['SN'];
                        $newq=$Quantity+$row['Quantity'];
                        //$newd=Date;
                        $inquery="UPDATE log SET Date='".$Date."', Name='".$Name."',Quantity='".$newq."'  WHERE SN=".$id;
                    }
                    else
                    {
                        $inquery="INSERT into log VALUES (NULL,'".$Date."','".$Name."',".$Quantity.")";
                    }
            }
        }
        
         //$inquery="UPDATE log SET Date='".$Date."', Name='".$Name."', Quantity='".$newq."' WHERE SN=".$id;
        //var_dump($inquery);
        
        if ($connection->query($inquery) === TRUE) {
  
    header("refresh:0.5; url=log.php");
    
      //echo "New record created successfully";
} else {
    echo "Error: " . $inquery . "<br>" . $connection->error;
}

$connection->close();
}

		  
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
 
 
 