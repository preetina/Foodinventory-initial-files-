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
    <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px;"><b><u>Admin Panel</u></b></h1>
<p>(Stock Management)</p>

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Add Stock</b></a></p>


<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="stock_modify.php" ><b>Update Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="delete_item.php" ><b>Delete Stock</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
    
</div>
<br/>
<form action="insert_item.php" method="post">
<table width=400px" border="5" cellpadding="1" cellspacing="1" align="center">
<center><p><b>Add your stock here!</b></p></center>
<tr><th><br/>Item <input type="text" name="Item" placeholder="Enter the Item" ><br/></th></tr>
<tr><th><br/>Quantity <input type="text" name="Quantity" placeholder="Enter the Quantity" ><br/></th></tr>
<tr><th><br/>Date <input type="text" name="Date" placeholder="Enter the Date"><br/></th></tr>
<tr><th><br/>Rate <input type="text" name="Rate" placeholder="Enter the Rate"><br /></th></tr>
<tr><td colspan="2"><br /><b><center><input type="submit" name="submit" value="Add"></center></b></p></td></tr>


</table>
<div>
<br/><br/>


</div>
</div>

</form>

</body>
</html>

