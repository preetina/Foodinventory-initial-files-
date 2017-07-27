<html>
<head><title>Updating the record in database</title></head>
<body>

<?php
include("index.php");
//connecting to the mysql database
$con=mysqli_connect('127.0.0.1','root','');

//selecting the database
mysqli_select_db($con,'foodinventory');

//selecting query
$sql="SElECT * FROM menu where Category='Snacks'";


//Executing the query

$records=mysqli_query($con,$sql);

?>
 <div id="main">
    <div id="navigation">
    <h1 style="text-align: left; font-family: Lucida Calligraphy; font-size:19px;"><b><u>Menu Management</u></b></h1>
    <br />

<p style="font-size: 17px; font-family:Minion Pro Med;"><b>Delete Item From</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="snacks_del.php"><b>1.Snacks</b></a></p>
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="Bev_del.php"><b>2.Beverages</b></a></p>
<hr />
<p style="font-size: 17px; font-family:Minion Pro Med;"><a href="home.php"><b>Logout</b></a></p>
</div>
<br />
 <br/><p style="text-align: left; font-family: Lucida Calligraphy; font-size:25px; text-align:center"><b>Delete Your Item Here!</b></p>


<br/>
</div>

</body>
</html>
