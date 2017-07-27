<?php include("../includes/layouts/header.php");?>


<div id="main">

    <div id="navigation">
    <br />
      <p style="font-size: 17px; font-family:Minion Pro Med;"><a href="login.php" ><b>Admin Panel</b></a></p>
      <p style="font-size: 17px; font-family:Minion Pro Med;"><a href="kitchenlogin.php"><b>Kitchen Panel</b></a></p>
      <p style="font-size: 17px; font-family:Minion Pro Med;"><a href="billing.php"><b>Customer Billing</b></p></a>
     

    <h1></h1>
    
    </div>
    <div id="page">

    
    </div>
   
    
    <br />
    
  <p style="text-align: left;font-size:28px; text-align: center"><b>Generate your invoice!</b></p>
 
 <table width="100px" border="2" cellpadding="2" cellspacing="2" align="center">
	<tr>
    
    
\
	<th>Item</th>
	<th>Quantity</th>
	<th>Unit Price</th>
    	<th>Unit Price</th>
	</tr>
	<?php
	while($row=mysqli_fetch_array($records))
	{
		echo "<tr><form action=menus.php method=post >";
	
		echo "<td><input type=text name=nam value='".$row['Name']."'></td>";
			echo "<td><input type=text name=price value='".$row['Price']."'></td>";
			echo "<input type=hidden name=Id value='".$row['Id']."'>";
		
			echo "<td><input type=Submit value=Submit>";

echo "</form></tr>";
		
	}
	?>
</table>


    </div>
    
    <?php include("../includes/layouts/footer.php");?>
    