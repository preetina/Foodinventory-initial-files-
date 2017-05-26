<?php
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
<br />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>

<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="insert.php" ><b>Stock Management</b></a></p>

<p style="font-size:17px; font-family: Minion Pro Med;"><a href="home.php"><b>Foodlist Management</b> </a></p>
    
</div>
<br/>
<form action="add.php" method="post">
<p><b>Manage your stock here.</b></p>
<input type="text" name="Item" placeholder="Item" ><br/><br/>
<input type="text" name="Quantity" placeholder="Quantity" ><br/></br>
<input type="text" name="Rate" placeholder="Rate"><br/></br>
<input type="text" name="Date" placeholder="Date">
<div>
<br/><br/>
<input type="submit" name="submit" value="Add">
<input type="button" name="insert" value="Update">
<input type="button" name="insert" value="Delete">
<input type="button" name="insert" value="Find">

</div>
</div>

</form>

</body>
</html>
<?
