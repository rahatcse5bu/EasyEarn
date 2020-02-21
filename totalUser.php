<?php

include "config.php";
$sqlForTotalUser="SELECT COUNT(*) AS x FROM user";
$resultForTotalUser=$con->query($sqlForTotalUser);
if($resultForTotalUser){
while($row_t_user=mysqli_fetch_assoc($resultForTotalUser)){
	echo $row_t_user['x'];
	
}
}
?>