<?php
include "config.php";
if(isset($_POST['mw'])){
$mw=$_POST['mw'];
$sql="UPDATE admin_control SET minimum_withdraw='$mw'";
}
else if(isset($_POST['tad'])){
$tad=$_POST['tad'];
$sql="UPDATE admin_control SET total_ads='$tad'";
}
 else if(isset($_POST['wb'])){
$wb=$_POST['wb'];
$sql="UPDATE admin_control SET welcome_bonus='$wb'";
}
else if(isset($_POST['adwt'])){
$adwt=$_POST['adwt'];
$sql="UPDATE admin_control SET ad_waiting_time='$adwt'";
}
else if(isset($_POST['ri'])){
$ri=$_POST['ri'];
$sql="UPDATE admin_control SET ref_income='$ri'";
}
else if(isset($_POST['aup'])){
$aup=$_POST['aup'];
$sql="UPDATE admin_control SET ad_unit_price='$aup'";
}
//quiz
else if(isset($_POST['qp'])){
$qp=$_POST['qp'];
$sql="UPDATE admin_control SET quiz_price='$qp'";
}
else if(isset($_POST['qri'])){
$qri=$_POST['qri'];
$sql="UPDATE admin_control SET quiz_ref_income='$qri'";
}
else if(isset($_POST['qwt'])){
$qwt=$_POST['qwt'];
$sql="UPDATE admin_control SET quiz_waiting_time='$qwt'";
}


else if(isset($_POST['status'])){
$status=$_POST['status'];
$invoiceID=$_POST['invoiceID'];
$sql="UPDATE invoice SET status='paid',Paid_on=now() WHERE id='$invoiceID'";
}

$result=$con->query($sql);
echo $mw;
?>