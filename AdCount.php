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
$d=date("Y_m_d");
$sqlForDate="CREATE TABLE IF NOT EXISTS $d (

username VARCHAR(80),
ads INT(9) NOT NULL DEFAULT 0,
quiz INT(9) NOT NULL DEFAULT 0,
 PRIMARY KEY(username)

);";
$c=0;
$resultForDate=$con->query($sqlForDate);

*/
$c=0;
$sqlForUserInsert="INSERT IGNORE INTO ads SET username='$u' ,date='$d';";
$resultForUserInsert=$con->query($sqlForUserInsert);
if($resultForUserInsert){
//echo "insertion True";	
}
$sqlForCount="SELECT * FROM ads WHERE username='$u' AND date='$d'";
$resultForCount=$con->query($sqlForCount);
if($resultForCount){
while($roo=mysqli_fetch_assoc($resultForCount)){
	$c=$roo['ads'];
	
}

}
if($c<$tad){
$u=$_SESSION['username'];


echo "<p style='font-family: sevenSegment;' class='text-info';>"."You Have Watched: ".$c."<br>"."Ads Left For Today: "; echo $tad-$c.'</p>';

}
else{
	//echo "You Have Already Watched all the ads";
	//include "AdDone.php";
	$done=1;
	echo "<p style='font-family: sevenSegment;' class='text-info';>"." No More Ads Available";
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
