<?php

include ("dbconnect.php");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$teacher_name = $_POST['teacher_name'];
$subject_name=$_POST('subject_name');
$school = $_POST['school'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$exp=$_POST('exp');
$doj = $_POST['doj'];

$sql = "INSERT INTO teacher (`teacher_name`,`subname`,`school`,`gender`,
`qualification`,`exp`,`doj`) 
VALUES`teacher_name`,`subject_name`,`school`,`gender`,
`qualification`,`exp`,`doj`)";

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