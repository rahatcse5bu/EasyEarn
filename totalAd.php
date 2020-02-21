<?php

include "config.php";
$sqlForTotalAd="SELECT SUM(adcount) AS x FROM user";
$resultForTotalAd=$con->query($sqlForTotalAd);
if($resultForTotalAd){
while($row_t_ad=mysqli_fetch_assoc($resultForTotalAd)){
	echo $row_t_ad['x'];
	
}
}
?>