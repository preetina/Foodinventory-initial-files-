<?php
include("index.php");
$connect=mysqli_connect("localhost","root","","foodinventory");

?>
<!Doctype html>
<html>
<head><title>Date range</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"></script>

</head>
<body>
<div id="main">

<div id="navigation">
</div>
<input type="text" name="from_date" id="from_date" class="form-control " placeholder=" Enter From date">
<input type="text" name="to_date" id="to_date" class="form-control " placeholder="Enter <To date">
<input type="button" name="filter" id="filter" value="filter" />



</div>
</body>
</html>