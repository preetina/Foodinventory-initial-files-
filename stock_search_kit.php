<?php
include("index.php");

?>

<html>
<head>
<title>Filter</title></head>
<body>
<div id="main">
    <div id="navigation">

 <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px ;"><b><u><a href="kitchen.php">Kitchen Panel</a></u></b></h1>

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="order.php"><b>Place Order</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="view_stock.php"><b>View Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="log.php"><b>Log Entry</b></a></p>

<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>


	</div>
<form action="search_item_kit.php" method="post">
    <br />
    <br /><br/>
	<p style="text-align:center; font-size:30px; font-family: Calibri ; color:#8D0D19 "><b> Stock Item </b></p>
	<center>
	<input type="text" name="valueToSearch" placeholder="Enter an Item here" >
	<input type="submit" name="search" value="Search">
	
	
	
   
</form>
</div>


</body>
</html>