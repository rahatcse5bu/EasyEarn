<?php
$db="rahat";
$dbhost="localhost";
$pass="";
$user="root";
$con= mysqli_connect($dbhost,$user,$pass,$db);
if($con){
///print("Connected");	
}
else{
	print("Database Not  Connected");
}
?>