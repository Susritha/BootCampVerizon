?php
include ("dbconnect.php");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$ccname= $_POST['ccname'];
$cname=$_POST('cname');
$schoolnum = $_POST['schoolnum'];

$sql = "INSERT INTO trainer (`ccname`,`cname`,`schoolnum`) 
VALUES(`ccname`,`cname`,`schoolnum`)";

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