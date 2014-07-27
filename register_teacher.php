<?php

include ("dbconnect.php");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$teacher_id=$_POST['teacher_id'];
$teacher_name = $_POST['teacher_name'];
$subject_name=$_POST['subname'];
$school = $_POST['school'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$exp=$_POST['exp'];
$doj = $_POST['doj'];

$sql = "INSERT INTO teacher 
VALUES('teacher_id','teacher_name','subject_name','school','gender',
'qualification','exp','doj')";

echo $sql;

if (!mysql_query($sql,$con))
 	 {
 	 echo 'error';
 	 die('Error: ' . mysql_error());
 	 }
 	 else{
 	 echo 'success';
 	 }

?>