<?php
include ("dbconnect.php");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$trid=$_POST['trid'];
$trname= $_POST['trname'];
$location=$_POST['location'];
$trainingnum = $_POST['trainingnum'];
$schoolsnum= $_POST['schoolsnum'];
$teachersnum = $_POST['teachersnum'];
echo $trname;
$sql = "INSERT INTO trainer  
VALUES('$trid','$trname','$location','$trainingnum','$schoolsnum',
'$teachersnum')";


if (!mysql_query($sql,$con))
 	 {
 	 echo 'error';
 	 die('Error: ' . mysql_error());
 	 }
 	 else{
 	 echo 'success';
 	 }

?>