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
    <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px ;"><b><u><a href="kitchen.php">Kitchen Panel</a></u></b></h1>

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="order.php"><b>Place Order</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="view_stock.php"><b>View Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="log.php"><b>Log Entry</b></a></p>
<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>

</div>
<br/>
<form action="log_kitchen.php" method="post">
<br/>
<p style="text-align:center; font-size:30px; font-family: Calibri ; color:white "><b>Log Entry!</b></p>
<p style="text-align: center;"><b>Enter the log!</b></p>
<table width=400px" border="4" cellpadding="4" cellspacing="4" align="center">


<tr><th><br/><label>Date</label><input type="date" name="Date" required<br/></th></tr>
<tr><th><br/>Name <input type="text" name="Name" placeholder="Enter the Item" required><br /></th></tr>
<tr><th><br/>Quantity <input type="text" name="Quantity" placeholder="Enter the Quantity" required><br /></th></tr>

<tr style="text-align: center;"><td colspan="2" ><input type="submit" name="submit" value="Submit">
</td></tr>
</table>

<div>
<br/>
<!-- <?php
include("display_records.php");
?> -->
</div>
</div>
</form>

</body>
</html>

