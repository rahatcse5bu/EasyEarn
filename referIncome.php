

<?php
$u=$_SESSION['username'];
include "config.php";
include "Get.php";
$income=0;
$ss="SELECT SUM(total_balance-$wb) AS income FROM balance b INNER JOIN user u ON u.username=b.username WHERE u.ref='$u'";
$rslt=$con->query($ss);
if ($rslt){
while($rw=mysqli_fetch_assoc($rslt)){
	$income=$rw['income'];
	//$income=99;
	
}
//$income=90;
}
else{
	$income=0;
}
echo $ri*$income;


?>