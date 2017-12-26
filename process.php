<?php

/**
 * @author lolkittens
 * @copyright 2017
 */

//get values passed from klog.php

$username=$_POST['username'];
$password=$_POST['password'];
//to prevent mysql injection
$username=stripcslashes($username);
$username=stripcslashes($password);
$username=mysqli_real_escape_string();
$password=mysqli_real_escape_string($password);
//connecting to the database
mysqli_connect("localhost","root","");
mysqli_select_db("foodinventory");
//Query

$result=mysql_query("select * from kitchen where username='$username' and password='password'")
or die ("failed to query database".mysql_error());

$row=mysql_fetch_array($result);
if($row['username']==$username&&$row['password']==$password)
{echo "Login success!";
    
}
else
{echo "Failed";}






?>