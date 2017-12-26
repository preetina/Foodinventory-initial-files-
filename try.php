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
   $Item=$_POST['Item'];
	     $Quantity=$_POST['Quantity'];
          $Unit=$_POST['Unit'];
	     $Category=$_POST['Category'];
	     $Date=$_POST['Date'];
	     $Rate=$_POST['Rate'];
         
         
         	$query = "INSERT into list VALUES (NULL,'".$Item."','".$Quantity."','".$Unit."','".$Category."','".$Date."',".$Rate.")";
      //  $query="UPDATE list SET Item='$_POST[item]', Quantity='$_POST[quan]',Date='$_POST[dat]',Rate='$_POST[rat]' WHERE SN='$_POST[sn]'";

		// var_dump($query);
		
if ($connection->query($query) === TRUE) {
  
    header("refresh:0.5; url=insert.php");
      //echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();
		  
         
        $sql="Select * From list";
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
        
        
    
    if($data['Item']==$Item)
    
   {
    $data['Quantity']=  $data['Quantity']+$Quantity;
    $up="UPDATE list SET Item='$_POST[item]', Quantity='$_POST[quan]',Date='$_POST[dat]',Rate='$_POST[rat]' WHERE SN='$_POST[sn]'";

        	echo "<tr>";
    	echo "<td>".$data['Item']."</td>";
        echo "<td style='color:#DC143C'>".$data['Quantity'].$data['Unit']."</td>";
        	echo "<td>".$data['Category']."</td>";
        	echo "</tr>";
   }
   }
   if ($connection->query($query) === TRUE) {
  
    header("refresh:0.5; url=insert.php");
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
 
 