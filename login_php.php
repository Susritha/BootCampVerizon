include ("dbconnect.php");
<script>alert("hi");</script>
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');


$name = $_REQUEST['username'];
$job = $_REQUEST['password'];
mysql_close($con);
?>
