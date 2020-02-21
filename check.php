<?php
include "config.php";
if (isset($_POST['user_name'])){
	$user=$_POST['user_name'];
	$q="SELECT * FROM user WHERE username='$user'";
	$re=$con->query($q);
	echo mysqli_num_rows($re);
	
	
	
	
}
if (isset($_POST['mail'])){
	$email=$_POST['mail'];
	$q="SELECT * FROM user WHERE email='$email'";
	$re=$con->query($q);
	echo mysqli_num_rows($re);
	
	
	
	
}
















?>