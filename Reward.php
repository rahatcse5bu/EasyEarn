<?php
session_start();
?>
<?php
$u=$_SESSION['username'];
include "Get.php";
include "config.php";
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
$c=0;
$sqlForUserInsert="INSERT IGNORE INTO ads SET username='$u',date='$d';";
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
//echo "  true7";
}
if($c<$tad){
$u=$_SESSION['username'];
//$d=date("Y/m/d");
$c=$c+1;
$sql="UPDATE ads SET ads='$c',adsIncome=adsIncome+'$aup' WHERE username='$u' AND date='$d'";
$sqlForStore="UPDATE balance SET balance_now=balance_now+$aup,total_balance=total_balance+$aup WHERE username='$u'";
$sqlForAdcount="UPDATE user SET adcount=adcount+1 WHERE username='$u'";
$sqlForRef ="UPDATE balance b SET balance_now=balance_now+($aup*$ri),total_balance=total_balance+($aup*$ri) WHERE b.username In (SELECT ref FROM user WHERE username='$u')";
$resultForRef=$con->query($sqlForRef);
$resultForAdcount=$con->query($sqlForAdcount);
$resultForStore=$con->query($sqlForStore);
$result=$con->query($sql);
if (($result)&&($resultForStore)&&($resultForRef)&&($resultForAdcount)){
	include "NextAds.php";
	//echo "Watched";
}
else{
	//echo "Error Occuredddddddddddddd".$con->error;
}

/*echo "<p style='font-family: sevenSegment;' class='text-info';font-size:550%>"."You Have Watched :".$c."  "."Ads Left For Today :"; echo 20-$c.'</p>';
*/
}
else{
	//echo "You Have Already Watched all the ads";
	include "AdDone.php";
	$done=1;
	echo '<script type="text/javascript">$(document).ready(function (){ $("#wa").attr("disabled","disabled")}); </script>';
}


?>


<script type="text/javascript">
$(document).ready(function (){
	//hiding "Get Reward" Button
	$("#ok").hide();
	
	</script>