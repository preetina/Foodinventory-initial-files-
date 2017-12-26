<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include("index.php");
//include_once("kitchen.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<center><h1 style="font-family: Lucida Calligraphy; font-size: 22px;color:#1A446C">Kitchen Login</h1></center>
<form name="login" method="POST" action="kitchen.php">
<table width=400px" border="3" cellpadding="3" cellspacing="2" align="center">
<tr><th><p style="font-size: 30px; font-family: Minion Pro Med;color:#1A446C"><b>Username</b> <input name="username" type="text" maxlength=20/></p></th></tr>
<tr><th><p style="font-size: 30px; font-family: Minion Pro Med;color:#1A446C"><b>Password</b> <input name="password" type="password" maxlength=50 /></p></th></tr>
<tr><td colspan="2"><br /><b><center><input type="submit" name="login" value="Login" /></center></b></p></td></tr>


</table>

</table>
<?php

if(isset($_POST['login']) && !isset($_SESSION['kitchen'])){
	?>
 <center>   <p style="color: red"><span class="error"><b>Incorrect username or password!</b></span></p></center>
    <?php
    }
	?>



</form>

</body>
</html>
