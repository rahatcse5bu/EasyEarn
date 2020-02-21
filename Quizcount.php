<?php
session_start();
?>
<?php
$u=$_SESSION['username'];
include "config.php";
include "Get.php";
//include"database.php";
$d=date("Y-m-d");
/*
$sqlForDate="CREATE TABLE IF NOT EXISTS $d (
username VARCHAR(80),
ads INT(9) NOT NULL DEFAULT 0,
quiz INT(9) NOT NULL DEFAULT 0,
 PRIMARY KEY(username)

);";
*/
$qz=0;
$sqlForUserInsert="INSERT IGNORE INTO ads SET username='$u',date='$d';";
$resultForUserInsert=$con->query($sqlForUserInsert);
if($resultForUserInsert){
//echo "insertion True";	
}
$sqlForCount="SELECT * FROM ads WHERE username='$u' AND date='$d'";
$resultForCount=$con->query($sqlForCount);

$qzCount="SELECT * FROM quiz";
$resultForQuizCount=$con->query($qzCount);
//how many quiz in total 
$ttlQuiz=0;
$ttlQuiz=mysqli_num_rows($resultForQuizCount);




if($resultForCount){
while($roo=mysqli_fetch_assoc($resultForCount)){
	$qz=$roo['quiz'];
	
}
//echo "  true7";
}
if($qz<($ttlQuiz)){
$u=$_SESSION['username'];
//$d=date("Y/m/d");
/*
$c=$c+1;
$sql="UPDATE $d SET ads='$c' WHERE username='$u'";
$sqlForStore="UPDATE balance SET balance_now=balance_now+2,total_balance=total_balance+2 WHERE username='$u'";
$resultForStore=$con->query($sqlForStore);
$result=$con->query($sql);
if (($result)&&($resultForStore)){
	//include "NextAds.php";
	//echo "Watched";
}
else{
	echo "Error Occuredddddddddddddd".$con->error;
}
*/

echo "<p style='font-family: sevenSegment;' class='text-info';>"."You Have Completed: ".$qz."<br>"."Quiz Left For Today: "; echo ($ttlQuiz)-($qz).'</p>';

}
else{
	//echo "You Have Already Watched all the ads";
	//include "AdDone.php";
	$done=1;
	echo "<p style='font-family: sevenSegment;' class='text-info';>"." No More Quiz Available";
	echo '<script type="text/javascript">$(document).ready(function (){ $("#wa").attr("disabled","disabled")}); </script>';
}


?>
<head>
<style type="text/css">
@font-face{
	
	font-family: sevenSegment;
	src: url("SevenSegment.ttf");
	
}

</style>
</head>
