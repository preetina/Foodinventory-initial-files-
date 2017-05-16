<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("index.php");?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h1 style="font-family: Lucida Calligraphy; font-size: 22px;">Admin Login</h1>
<form name="login" method="POST" action="admin.php">
<p style="font-size: 20px; font-family: Minion Pro Med;"><b>Username </b><input name="username" type="text" maxlength=20/></p>
<p style="font-size: 20px; font-family: Minion Pro Med;"><b>Password</b> <input name="password" type="password" maxlength=50 /></p>
<?php
if(isset($_POST['login']) && !isset($_SESSION['admin'])){
	?>
    <p style="color: red"><span class="error"><b>Incorrect username or password</b></span></p>
    <?php
    }
	?>
    
<p style="font-family: Minion Pro Med; font-size: 18px;"><input type="submit" name="login" value="Login"/></p>
</form>

</body>
</html>
