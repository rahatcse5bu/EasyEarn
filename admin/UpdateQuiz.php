<?php
include "config.php";
mysqli_set_charset($con,'utf8');
$id=$_POST['id'];
$question=$_POST['question'];
$qz1= $_POST['quiz1'];
$qz2= $_POST['quiz2'];
$ans1= $_POST['ans1'];
$t1= $_POST['t1'];
$ans2= $_POST['ans2'];
$t2= $_POST['t2'];

$sqlQuizEdit="UPDATE quiz SET description='$question',quiz1='$qz1',ans1='$ans1',t1='$t1',quiz2='$qz2',ans2='$ans2',t2='$t2'  WHERE id='$id'";
$result1=$con->query($sqlQuizEdit);
if($result1){
echo "Done";	
	
	
}else{
	echo "Error Occured";
	
	
}
?>