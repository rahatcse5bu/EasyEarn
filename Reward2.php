<?php
session_start();
?>
<?php
$credit=0;
$u=$_SESSION['username'];
include "Get.php";
include "config.php";
$ck=0;
include "GetQuiz.php";
$userAns1=$_POST['userAns1'];
$userAns2=$_POST['userAns2'];
$z=$_POST['z'];
if ($_SESSION['z']==$z){

if (strpos($userAns1,$ans1)!== false){
		 $credit=$credit+$qp;
		 $ck=1;
	 }
	 if (strpos($userAns2,$ans2)!== false){
		 $credit=$credit+$qp;
		 $ck=1;
	 }
	if ($ck==0){
		$credit=$credit+($qp/2); 
	 }


$d=date("Y-m-d");

$qz=0;

$sqlForUserInsert="INSERT IGNORE INTO ads SET username='$u',date='$d';";
$resultForUserInsert=$con->query($sqlForUserInsert);
if($resultForUserInsert){
//echo "insertion True";	
}
$sqlForCount="SELECT * FROM ads WHERE username='$u' AND date='$d'";
$resultForCount=$con->query($sqlForCount);
if($resultForCount){
while($roo=mysqli_fetch_assoc($resultForCount)){
	$qz=$roo['quiz'];
	
}
//echo "  true7";
}

//total quiz 
$qzCount="SELECT * FROM quiz";
$resultForQuizCount=$con->query($qzCount);
//how many quiz in total 
$ttlQuiz=0;
$ttlQuiz=mysqli_num_rows($resultForQuizCount);


if($qz<$ttlQuiz){
$u=$_SESSION['username'];
//$d=date("Y/m/d");
$qz=$qz+1;
$sql="UPDATE ads SET quiz='$qz',quizIncome=quizIncome+'$credit' WHERE username='$u' AND date='$d'";
$sqlForStore="UPDATE balance SET balance_now=balance_now+$credit,total_balance=total_balance+$credit WHERE username='$u'";
//insert quiz to user table
$sqlForTotalQuizCount="UPDATE user SET quizCount=quizCount+1 WHERE username='$u'";
//$sqlForAdcount="UPDATE user SET adcount=adcount+1 WHERE username='$u'";
$sqlForRef ="UPDATE balance b SET balance_now=balance_now+($credit*$qri),total_balance=total_balance+($credit*$qri) WHERE b.username In (SELECT ref FROM user WHERE username='$u')";
$resultForRef=$con->query($sqlForRef);
$resultForTotalQuizCount=$con->query($sqlForTotalQuizCount);
$resultForStore=$con->query($sqlForStore);
$result=$con->query($sql);

if (($result)&&($resultForStore)&&($resultForRef)&&($resultForTotalQuizCount)){
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

//Captcha cheking end
}
else {
	echo "wrong Captcha";
}

?>


<script type="text/javascript">
$(document).ready(function (){
	//hiding "Get Reward" Button
	$("#ok").hide();
	
	</script>