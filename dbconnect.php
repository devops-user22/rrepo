<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'bookDB'); 
define('DB_USER','test'); 
define('DB_PASSWORD','1234'); 

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
?>
