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
    
      //echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();
}

else if(isset($_POST['update']))
{
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
        
        if ($connection->query($inquery) === TRUE) {
  
    header("refresh:0.5; url=insert.php");
    
      //echo "New record created successfully";
} else {
    echo "Error: " . $inquery . "<br>" . $connection->error;
}

$connection->close();
}

		  else if(isset($_POST['delete']))
         {$Item=$_POST['Item'];
	     $Quantity=$_POST['Quantity'];
          $Unit=$_POST['Unit'];
	     $Category=$_POST['Category'];
	     $Date=$_POST['Date'];
	     $Rate=$_POST['Rate']; 
   $ssquery= "select * from list";
         $results=mysqli_query($dbconnect,$ssquery);
         $data=array();
        if(mysqli_num_rows($results)>0)
        {
            while($row=mysqli_fetch_assoc($results)){
                    if($Item==$row['Item'])
                    {
                        $id=$row['SN'];
                        $delq=$row['Quantity']-$Quantity;
                    }
            }
        }

            $delquery="UPDATE list SET Quantity='".$delq."', Unit='".$Unit."', Category='".$Category."', Date='".$Date."', Rate='".$Rate."' WHERE SN=".$id;
        //print_r($delquery);
        //var_dump($inquery);
        
        if ($connection->query($delquery) === TRUE) {
   // echo "rest"; exit;  
    header("refresh:0.5; url=insert.php");
    
      //echo "New record created successfully";
} else {
    echo "Error: " . $delquery . "<br>" . $connection->error;
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
 
 
 