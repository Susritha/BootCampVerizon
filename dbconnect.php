<?php
$db_host="localhost";
$db_dbase="bharti";
$db_user="root";
$db_pass="";
$con= mysql_connect($db_host,$db_user,$db_pass,$db_dbase) or die("unable to connect to mysql:".mysql_error());
mysql_select_db($db_dbase,$con) or die("unable to connect to mysql:".mysql_error());
?>