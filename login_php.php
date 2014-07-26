
<script>alert("hi");</script>
<?php
include ("dbconnect.php");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$name = $_REQUEST['username'];
$password = $_REQUEST['password'];
 $qry="SELECT * FROM login WHERE username = 'adi' AND password = 'aditya';";
 
 $result=mysql_query($qry);
 

$hello= mysql_fetch_assoc($result);
echo $hello['role'];

if ($hello['role'] == 'cc'){include '';}



mysql_close($con);
?>
