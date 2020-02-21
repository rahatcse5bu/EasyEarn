<?php

include "config.php";

$sqlForAdminControl="SELECT * FROM admin_control";
$resultForAdminControl=$con->query($sqlForAdminControl);
if($resultForAdminControl){
if($row = mysqli_num_rows($resultForAdminControl)){
	$r=mysqli_fetch_assoc($resultForAdminControl);
		$mw=$r['minimum_withdraw'];
		$tad=$r['total_ads'];
		$wb=$r['welcome_bonus'];
		$adwt=$r['ad_waiting_time'];
		$ri=$r['ref_income'];
		$aup=$r['ad_unit_price'];
		$qp=$r['quiz_price'];
		$qri=$r['quiz_ref_income'];
		$qwt=$r['quiz_waiting_time'];
}

else{

		$mw=0;
		$tad=0;
		$wb=0;
		$adwt=31;
		$ri=0;
		$aup=1;
		$qp=1;
		$qri=0;
		$qwt=121;
      
}
}
else {
	
		$mw=0;
		$tad=0;
		$wb=0;
		$adwt=31;
		$ri=0;
		$aup=1;
		$qp=1;
		$qri=0;
		$qwt=121;	
	//echo "error occured";
}
	
		echo $mw;
		echo $tad;
		$wb=0;
		echo $adwt;
		$ri=0;
		$aup=1;
		$qp=1;
		echo $qri;
		echo $qwt;
      ?>
	  
