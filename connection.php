<?php
error_reporting(0);
$host="localhost";
$user="root";
$pass="";
$db="sobagudb";
$connection=mysqli_connect($host,$user,$pass,$db);
if($connection){
	echo "";
}
else{
	echo"connection failed";
}
?>