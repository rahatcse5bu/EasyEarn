<?php
//header('Content-Type: text/html; charset=utf8_bin');
include "config.php";
mysqli_set_charset($con,'utf8');
ini_set('default_charset', 'utf-8');
$num_quiz=0;
$d=date("Y-m-d");
/*
$sqlForDate="CREATE TABLE IF NOT EXISTS $d (
D Date ,
username VARCHAR(80),
ads INT(9) NOT NULL DEFAULT 0,
quiz INT(9) NOT NULL DEFAULT 0,
 PRIMARY KEY(username)

);";
*/


$sqlForAdminControl="SELECT * FROM ads WHERE username='$u'AND date='$d'";
$resultForAdminControl=$con->query($sqlForAdminControl);
if($resultForAdminControl){
	
if($row = mysqli_num_rows($resultForAdminControl)){
	$r=mysqli_fetch_assoc($resultForAdminControl);
		$num_quiz=$r['quiz'];
		
}


else{

//echo '<p class="text-primary" align="center">'."No Refer  data Yet !!!".'</p>';
      
}
}
else {
	$num_quiz=0;
	//echo "error occured";
}
	
	
	
      ?>
	  
