?php
include ("dbconnect.php");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$trname= $_POST['trname'];
$location=$_POST('location');
$trainingnum = $_POST['trainingnum'];
$schoolsnum= $_POST['schoolsnum'];
$teachersnum = $_POST['teachersnum'];

$sql = "INSERT INTO trainer (`trname`,`location`,`trainingnum`,`schoolsnum`,
`teachersnum`) 
VALUES(`trname`,`location`,`trainingnum`,`schoolsnum`,
`teachersnum`)";

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