<?php
include("index.php");
?>
<!DOCTYPE html>
<html>
 <head>
 </head>
<body>
    <?php
    
        $sql="Select Item,Quantity From list";
        $result=mysqli_query($dbconnect,$sql);
        $datas=array();
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result)){
                $datas[]=$row;
            }
        }
        

    
    ?>
</body>
</html>
