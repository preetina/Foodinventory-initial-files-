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
    <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px;"><b><u>Kitchen Panel<br/><p style="font-size: 12px">(Place Order)</p></u></b></h1>
<br />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="order.php"><b>Place Order</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="display_records.php"><b>View Product list</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
</div>
<br/>
<form action="order_page.php" method="post">
<p style="text-align: center;"><b>Order an item here!</b></p>
<table width=350px" border="4" cellpadding="2" cellspacing="3" align="center">

<tr><th>Item </th><th><br/><input type="text" name="Item" placeholder="Enter the Item " ><br/><br /></th></tr>
<tr><th>Quantity</th><th><br/><input type="text" name="Quantity" placeholder="Enter the Quantity" ><br/><br /></th></tr>
<tr style="text-align: center;"><td colspan="2" ><input type="submit" name="submit" value="Order">
</td></tr>
</table>
<div>
<br/>

</div>
</div>

</form>

</body>
</html>

