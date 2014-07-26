<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

#include ("dbconnect.php");
$name = $_REQUEST['username'];
$job = $_REQUEST['password'];

<script>alert("hi");</script>

if (!mysql_query($sql)) {
  die('Error: ' . mysql_error($con));
}
echo "1 record added";

mysql_close($con);
?>
